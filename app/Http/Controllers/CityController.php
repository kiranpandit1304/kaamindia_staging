<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\State;
use App\Models\City;

class CityController extends Controller
{
    /**
     * @getCityByStateId
     *
     * @param  mixed  $request
     * @return void
     */
    public function getCityByStateName(Request $request)
    {
        $cityOption[] = '';
        foreach ($request->state_id as $stateName) {
            $state = State::where('name', $stateName)->select('id', 'name')->first();
            $cityOption[] = '<optgroup label="' . $state->name . '"></optgroup>';
            $cities = City::where('state_id', $state->id)->get();
            $cityOption[] = '<option></option>';
            foreach ($cities as $city) {
                $cityOption[] = '<option value="' . $city->name . '">' . $city->name . '</option>';
            }
        }
        return response()->json($cityOption);
    }

    /**
     * @employerLocationFilter
     *
     * @param  mixed $request
     * @return void
     */
    public function employerLocationFilter(Request $request)
    {
        $cityOption[] = '';
        $state = State::where('name', $request->stateName)->select('id', 'name')->first();
        $cityOption[] = '<optgroup label="' . $state->name . '"></optgroup>';
        $cities = City::where('state_id', $state->id)->get();
        $cityOption[] = '<option></option>';
        foreach ($cities as $city) {
            $cityOption[] = '<option value="' . $city->name . '">' . $city->name . '</option>';
        }
        return response()->json($cityOption);
    }
}
