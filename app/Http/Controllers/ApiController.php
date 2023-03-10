<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ApiController extends Controller
{
    /**
     * Display a listing of the cars.
     *
     * @return \Illuminate\Http\Response
     *
     * @OA\Get(
     *     path="/api/cars",
     *     summary="Get all cars",
     *     tags={"SHow Cars"},
     *     @OA\Response(
     *         response=200,
     *         description="List of cars"
     *     )
     * )
     */
    public function index()
    {
        $car = Car::all();

        return response()->json([
            'status' => 'success',
            'data' => $car
        ]);
    }



/**
 * @OA\Post(
 *     path="/api/register",
 *     operationId="register",
 *     tags={"Register Cars"},
 *     summary="Car Registered",
 *     description="Car Register Here",
 *      @OA\RequestBody(
 *      @OA\JsonContent(),
 *      @OA\MediaType(
 *     mediaType="multipart/form-data",
 *         @OA\Schema(
 *     type="object",
 *     required={"name","model","color"},
 *     @OA\Property (property = "name", type="string"),
 *     @OA\Property (property = "model", type="string"),
 *     @OA\Property (property = "color", type="string"),
 *  ),
 *  ),
 *  ),
 *      @OA\Response(
 *     response=201,
 *     description="Registered Successfully",
 *      @OA\JsonContent()
 * ),
 *     @OA\Response(
 *     response=200,
 *     description="Registered Successfully",
 *      @OA\JsonContent()
 * ),
 *     @OA\Response(
 *     response=422,
 *     description="Unprocessable Entry",
 *      @OA\JsonContent()
 * ),
 *     @OA\Response(
 *     response=400,
 *     description="Bad Request",
 *      @OA\JsonContent()
 * ),
 *     @OA\Response(
 *     response=404,
 *     description="Resource Not found",
 *      @OA\JsonContent()
 * ),
 * )
 */


public function register(Request $request)
{
    $validated=$request->validate(
        [
            'name'=>'required',
            'model'=>'required',
            'color'=>'required'
        ]
    );

    $data=$request->all();
    $car= Car::create($data);
    $success['token']=$car->createToken('carToken')->accessToken;
    $success['name']=$car->name;
    return response()->json(['success'=>$success]);

}


    /**
     * @OA\Delete(
     *      path="/api/car/{id}",
     *      operationId="destroy",
     *      tags={"Delete Car"},
     *      summary="Delete existing car",
     *      description="Deletes a record and returns no content",
     *      @OA\Parameter(
     *          name="id",
     *          description="Car id",
     *          required=true,
     *          in="path",
     *          @OA\Schema(
     *              type="integer"
     *          )
     *      ),
     *      @OA\Response(
     *          response=204,
     *          description="Successful operation",
     *          @OA\JsonContent()
     *       ),
     *      @OA\Response(
     *          response=401,
     *          description="Unauthenticated",
     *      ),
     *      @OA\Response(
     *          response=403,
     *          description="Forbidden"
     *      ),
     *      @OA\Response(
     *          response=404,
     *          description="Resource Not Found"
     *      )
     * )
     */
    public function destroy($id)
    {
        $car = Car::find($id);

        if (!$car) {
            return response()->json(['error' => 'Car not found'], 404);
        }

        $car->delete();

        return response()->json([], 204);
    }



    /**
     * @OA\Put(
     *     path="/api/update/{id}",
     *     operationId="update",
     *     tags={"Update Car"},
     *     summary="Update Car in DB",
     *     description="Update Car in DB",
     *     @OA\Parameter(name="id", in="path", description="Id of Article", required=true,
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\RequestBody(
     *        required=true,
     *        @OA\JsonContent(
     *           required={"title", "content", "status"},
     *           @OA\Property(property="name", type="string", format="string", example="Test Article Title"),
     *           @OA\Property(property="model", type="string", format="string", example="This is a description for kodementor"),
     *           @OA\Property(property="color", type="string", format="string", example="Published"),
     *        ),
     *     ),
     *     @OA\Response(
     *          response=200, description="Success",
     *          @OA\JsonContent(
     *             @OA\Property(property="status_code", type="integer", example="200"),
     *             @OA\Property(property="data",type="object")
     *          )
     *       )
     *  )
     */
    public function update(Request $request, $id)
    {
        $record = Car::find($id);

        if (!$record) {
            return response()->json(['error' => 'Record not found'], 404);
        }

        $record->update($request->all());

        return response()->json($record, 200);
    }


    /**
     * Display a listing of the cars.
     *
     * @return \Illuminate\Http\Response
     *
     * @OA\Get(
     *     path="/api/test",
     *     summary="Get all cars",
     *     tags={"SHow dd"},
     *     @OA\Response(
     *         response=200,
     *         description="List of cars"
     *     )
     * )
     */


    public function test()
    {
        $data=Car::all();
       dd($data);
    }



}
