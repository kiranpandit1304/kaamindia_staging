<?php

namespace App\Http\Controllers\Employer;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Company;
use App\Models\CompanyAddress;
use App\Models\Industry;
use App\Models\State;
use App\Services\Employer\CompanyService;
use Illuminate\Http\Request;
use App\Http\Requests\CompanyRequest;
use Illuminate\Support\Facades\Auth;

class CompanyController extends Controller
{
    /**
     * @index
     *
     * @return void
     */
    public function index()
    {
        $userId = Auth::id();
        $company = Company::with('companyAddress', 'industries')->where('user_id', $userId)->first();
        $states = State::where('country_id', 1)->get();
        $industryes = Industry::select('id', 'name')->get()->toArray();
        return view('employer.company.index', compact('company', 'states', 'industryes'));
    }

    /**
     * @store
     *
     * @param  mixed  $request
     * @return void
     */
    public function store(Request $request, company $company)
    {
        $id = $company->id;
        CompanyService::store($request, $id);
        return redirect()->route('employer.dashboard')->with('success', 'Company Add SuccessFull !');
    }

    /**
     * @show
     *
     * @param  mixed $company
     * @return void
     */
    public function show(Company $company)
    {
        $userId = Auth::id();
        $company = Company::with('companyAddress', 'industries')->where('user_id', $userId)->first();
        $states = State::where('country_id', 1)->get();
        $industryes = Industry::get();
        return view('employer.company.show', compact('company', 'states', 'industryes'));
    }

    /**
     * @getCityByStateId
     *
     * @param  mixed  $request
     * @return void
     */
    public function getCityByStateId(Request $request)
    {
        $cityOption = '';
        $cities = City::where('state_id', $request->state_id)->get();
        foreach ($cities as $city) {
            $cityOption .= '<option value="' . $city->id . '">' . $city->name . '</option>';
        }
        return response()->json($cityOption);
    }
}
