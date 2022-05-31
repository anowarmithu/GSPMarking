<?php

namespace App\Http\Controllers;

use App\Models\Applicant;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller {
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index() {

        $data = Applicant::selectRaw("
        COUNT(*) AS total_application,
        COUNT(CASE WHEN is_processed = 1 THEN 1 END) AS total_processed,
        COUNT(CASE WHEN is_processed = 1 AND total_mark >= 30 THEN 1 END) AS total_above,
        COUNT(CASE WHEN is_processed = 1 AND total_mark < 30 THEN 1 END) AS total_below
        ")->first();
        return view('home', compact('data'));
    }

    public function process() {
        $items = Applicant::where('is_processed', 0)->get();
        if (!count($items)) {
            return redirect(route('applicant.index'))->with('message', 'Nothing to process.');
        }
        DB::transaction(function () use ($items) {
            foreach ($items as $item) {
                $total_mark = 0;
                //Gender
                if ('Female' === $item->gender) {
                    $total_mark += 5;
                }
                //Personal Expense
                $expense_diff = $item->monthly_expense - $item->monthly_income;
                if ($expense_diff >= 201 && $expense_diff <= 500) {
                    $total_mark++;
                } else if ($expense_diff <= 800) {
                    $total_mark += 2;
                } else if ($expense_diff <= 1000) {
                    $total_mark += 3;
                } else if ($expense_diff <= 1500) {
                    $total_mark += 4;
                } else {
                    $total_mark += 5;
                }
                //Parents living status
                $parent_living_mark = 0;
                if ('Died' === $item->mother_living_status) {
                    $parent_living_mark += 3;
                } else if ('Alive' !== $item->mother_living_status && 'Died' !== $item->mother_living_status) {
                    $parent_living_mark += 5;
                }
                if ('Died' === $item->father_living_status) {
                    $parent_living_mark += 7;
                } else if ('Alive' !== $item->father_living_status && 'Died' !== $item->father_living_status) {
                    $parent_living_mark += 3;
                }
                $total_mark += $parent_living_mark > 10 ? 10 : $parent_living_mark;
                //Dependents
                $dependent_mark = 0;
                if ($item->older_age > 0) {
                    $dependent_mark += $item->older_age;
                }
                if ($item->class1to8 > 0) {
                    $dependent_mark += $item->class1to8;
                }
                if ($item->class9to12_hifj > 0) {
                    $dependent_mark += 2 * $item->class9to12_hifj;
                }
                if ($item->undergrad > 0) {
                    $dependent_mark += 3 * $item->undergrad;
                }
                $total_mark += $dependent_mark > 10 ? 10 : $dependent_mark;
                //Disability
                $disability_mark = 0;
                if ('None' !== $item->disabilities) {
                    $disability_mark += 10;
                }
                if ('None' !== $item->father_disability) {
                    $disability_mark += 7;
                }
                if ('None' !== $item->mother_disability) {
                    $disability_mark += 5;
                }
                if ($item->other_disability > 0) {
                    $disability_mark += 5 * $item->other_disability;
                }
                $total_mark += $disability_mark > 10 ? 10 : $disability_mark;
                //Asset Value
                if ($item->family_asset <= 99_999) {
                    $total_mark += 10;
                } else if ($item->family_asset <= 149_999) {
                    $total_mark += 8;
                } else if ($item->family_asset <= 199_999) {
                    $total_mark += 6;
                } else if ($item->family_asset <= 249_999) {
                    $total_mark += 5;
                } else if ($item->family_asset <= 299_999) {
                    $total_mark += 4;
                } else if ($item->family_asset <= 349_999) {
                    $total_mark += 3;
                } else if ($item->family_asset <= 399_999) {
                    $total_mark += 2;
                } else if ($item->family_asset <= 449_999) {
                    $total_mark += 1;
                }
                //Family Monthly Income
                if ($item->family_monthly_income <= 9_999) {
                    $total_mark += 10;
                } else if ($item->family_monthly_income <= 12_999) {
                    $total_mark += 8;
                } else if ($item->family_monthly_income <= 15_999) {
                    $total_mark += 6;
                } else if ($item->family_monthly_income <= 19_999) {
                    $total_mark += 4;
                } else if ($item->family_monthly_income <= 24_999) {
                    $total_mark += 2;
                } else if ($item->family_monthly_income <= 29_999) {
                    $total_mark += 1;
                }
                //SSC Result
                $total_mark += 0.8 * $item->ssc_result;
                //HSC Result
                $total_mark += 1.2 * $item->hsc_result;

                //Update Result
                $item->total_mark = $total_mark;
                $item->is_processed = 1;
                $item->save();
            }
        });
        $message = 'Total ' . count($items) . ' application\'s has been successfully processed.';
        return redirect(route('applicant.index'))->with('message', $message);
    }
}
