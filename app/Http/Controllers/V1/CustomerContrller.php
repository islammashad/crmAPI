<?php

namespace App\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Customer;
use Validator;

class CustomerContrller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = Customer::all();
        $data = $customers->toArray();

        $response = [
            'success' => true,
            'data' =>$data,
            'message' => 'Customers Retrieved Successfully'
        ];


        return response()->json($response,200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();

        $validator = Validator::make($input,[
            'name' => 'required',
            'phone' => 'required',
            'address' =>'required'
            ]);

        if ($validator->fails()) {
           $response = [
            'success' =>false,
            'data' => 'validation error',
            'message' =>$validator->errors();
           ];
           return response()->json($response,404);
        }
        $customer = Customer::create($input);
        $data = $customer->toArray();

        $response = [
            'success' => true,
            'data' => $data,
            'message' => 'Customer created successfully.'
        ];

        return response()->json($response, 200);
 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $customer = Customer::find($id);
        $data = $customer->toArray();

        if (is_null($customer)) {
            $response = [
                'success' => false,
                'data' => 'Empty',
                'message' => 'customer not found.'
            ];
            return response()->json($response, 404);
        }


        $response = [
            'success' => true,
            'data' => $data,
            'message' => 'Customer retrieved successfully.'
        ];

        return response()->json($response, 200);
 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {
        $input = $request->all();

        $validator = Validator::make($input, [
            'name' => 'required',
            'phone' => 'required',
            'address'=> 'required'
        ]);

        if ($validator->fails()) {
            $response = [
                'success' => false,
                'data' => 'Validation Error.',
                'message' => $validator->errors()
            ];
            return response()->json($response, 404);
        }

        $customer->name = $input['name'];
        $customer->phone = $input['phone'];
        $customer->address = $input['address'];
        $customer->save();

        $data = $customer->toArray();

        $response = [
            'success' => true,
            'data' => $data,
            'message' => 'Customer updated successfully.'
        ];

        return response()->json($response, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        
        $customer->delete();
        $data = $customer->toArray();

        $response = [
            'success' => true,
            'data' => $data,
            'message' => 'Customer deleted successfully.'
        ];

        return response()->json($response, 200);

    }
}
