<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{

    /**
     * @OA\Get(
     *     path="/api/show",
     *     tags = {"Show"},
     *     summary="Get a list of students",
     *     description="Returns a list of students",
     *     @OA\Response(response="200", description="Successful operation"),
     *     @OA\Response(response="400", description="Bad request"),
     *     @OA\Response(response="401", description="Unauthorized"),
     *     @OA\Response(response="404", description="Resource not found"),
     *     @OA\Response(response="500", description="Internal server error")
     * )
     */
    public function index()
    {
        $users = Student::all();

        return response()->json($users);
    }


    /**
     * @OA\Post(
     *     path="/api/register",
     *     operationId = "Register",
     *     tags = {"Register"},
     *     summary="Student Register",
     *     description="Student Register here",
     *      @OA\RequestBody(
     *        @OA\JsonContent(),
     *        @OA\MediaType(
     *        mediaType="multipart/form-data",
     *        @OA\Schema(
     *        type = "object",
     *        required={"name","email","password"},
     *        @OA\Property (property = "name",type="text"),
     *        @OA\Property (property = "email",type="text"),
     *        @OA\Property (property = "password",type="password"),
     * ),
     * ),
     * ),
     * @OA\Response(
     *     response = 201,
     *     description = "Register Successfully",
     *     @OA\JsonContent()
     * ),
     *    @OA\Response(
     *     response=200,
     *     description = "Register Successfully",
     *      @OA\JsonContent()
     * ),
     *      @OA\Response(
     *     response=422,
     *     description = "Unproccessable Entry",
     *      @OA\JsonContent()
     * ),
     *      @OA\Response(
     *     response=400,
     *     description = "Bad Request",
     *      @OA\JsonContent()
     * ),
     *      @OA\Response(
     *     response=404,
     *     description = "Resource Not Found",
     *      @OA\JsonContent()
     * ),
     *)
     */

    public function register(Request $request){
        $validated = $request->validate(
            [
                'name'=> "required",
                'email'=> "required",
                'password'=> "required",
            ]
        );
        $data = $request->all();
        $user = Student::create($data);
//        $success['token']=$user->createToken('authToken')->accessToken;
        $success['name']=$user->name;
        return response()->json(['success'=>$success]);
    }

//    /**
//     * @OA\Put(
//     *     path="api/update/{id}",
//     *     summary="Update a user",
//     *     tags={"Students"},
//     *     @OA\Parameter(
//     *         name="id",
//     *         in="path",
//     *         description="ID of the user to update",
//     *         required=true,
//     *         @OA\Schema(
//     *             type="integer",
//     *             format="int64"
//     *         )
//     *     ),
//     *     @OA\RequestBody(
//     *         description="New user information",
//     *         required=true,
//     *         @OA\JsonContent(ref="#/components/schemas/Student")
//     *     ),
//     *     @OA\Response(
//     *         response=200,
//     *         description="Student updated successfully",
//     *         @OA\JsonContent(
//     *             type="object",
//     *             @OA\Property(property="message", type="string"),
//     *             @OA\Property(property="data", ref="#/components/schemas/Student")
//     *         )
//     *     ),
//     *     @OA\Response(
//     *         response=404,
//     *         description="Student not found",
//     *         @OA\JsonContent(
//     *             type="object",
//     *             @OA\Property(property="message", type="string")
//     *         )
//     *     )
//     * )
//     *
//     * @OA\Schema(
//     *     schema="Student",
//     *     @OA\Property(property="name", type="string"),
//     *     @OA\Property(property="email", type="string"),
//     *     @OA\Property(property="password", type="string")
//     * )
//     */
//    public function update(Request $request, $id)
//    {
//        $user = Student::findOrFail($id);
//        $user->update($request->all());
//
//        return response()->json([
//            'message' => 'Student updated successfully',
//            'data' => $user,
//        ]);
//    }



    /**
     * @OA\Post(
     *     path="/api/students/{id}",
     *     operationId = "Student",
     *     tags = {"Update"},
     *   @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of the user to update",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *        required={"name","email","password"},
     *         )
     *     ),
     *      @OA\RequestBody(
     *        @OA\JsonContent(),
     *        @OA\MediaType(
     *        mediaType="multipart/form-data",
     *        @OA\Schema(
     *        type = "object",
     *        @OA\Property (property = "name",type="text"),
     *        @OA\Property (property = "email",type="text"),
     *        @OA\Property (property = "password",type="password"),
     * ),
     * ),
     * ),
     * @OA\Response(
     *     response = 201,
     *     description = "Register Successfully",
     *     @OA\JsonContent()
     * ),
     *    @OA\Response(
     *     response=200,
     *     description = "Register Successfully",
     *      @OA\JsonContent()
     * ),
     *      @OA\Response(
     *     response=422,
     *     description = "Unproccessable Entry",
     *      @OA\JsonContent()
     * ),
     *      @OA\Response(
     *     response=400,
     *     description = "Bad Request",
     *      @OA\JsonContent()
     * ),
     *      @OA\Response(
     *     response=404,
     *     description = "Resource Not Found",
     *      @OA\JsonContent()
     * ),
     *)
     */


    public function update($id, Request $request)
    {
        $user = Student::findOrFail($id);

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = $request->input('password');

        if ($request->hasFile('avatar')) {
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            $avatar->move(public_path('avatars'), $filename);
            $user->avatar = $filename;
        }

        $user->save();

        return response()->json([
            'message' => 'Student updated successfully',
            'data' => $user,
        ]);
    }
    /**
     * @OA\Delete(
     *     path="/api/delete/{id}",
     *     description="Delete a user by ID",
     *     operationId="delete",
     *     tags={"Delete"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of user to delete",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Student deleted successfully",
     *         @OA\JsonContent(
     *             type="object",
     *             @OA\Property(property="message", type="string")
     *         )
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Student not found",
     *         @OA\JsonContent(
     *             type="object",
     *             @OA\Property(property="message", type="string")
     *         )
     *     )
     * )
     */
    public function delete($id)
    {
        $user = Student::find($id);
        if (!$user) {
            return response()->json(['message' => 'Student not found'], 404);
        }
        $user->delete();
        return response()->json(['message' => 'Student deleted successfully'], 200);
    }



}
