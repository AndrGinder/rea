<?php

namespace App\Http\Controllers\Swagger;

/**
 * @OA\Post(
 *      path="/api/properties/",
 *      summary="New Property",
 *      tags={"Properties"},
 * 
 *      @OA\RequestBody(
 *          @OA\JsonContent(
 *              allOf={
 *                  @OA\Schema(
 *                      @OA\Property(property="owner_id", type="integer", example=1), 
 *                      @OA\Property(property="name", type="string", example="Property"), 
 *                      @OA\Property(property="square", type="decimal", example=100), 
 *                      @OA\Property(property="image", type="string"), 
 *                      @OA\Property(property="square_price", type="decimal", example=8000), 
 *                      @OA\Property(property="address", type="string", example="Capetown, Mandela St.200"), 
 *                  )
 *              }
 *          )
*       ),

 *      @OA\Response(
 *          response=200,
 *          description="Success"
 *      ),
 * ),
 */

class PropertyController extends Controller
{
    //
}
