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
 *                      @OA\Property(property="name", type="string", example="Property"), 
 *                      @OA\Property(property="owner_id", type="integer", example=1), 
 *                      @OA\Property(property="image", type="string"), 
 *                      @OA\Property(property="square", type="decimal", example=100), 
 *                      @OA\Property(property="square_price", type="decimal", example=8000), 
 *                      @OA\Property(property="address", type="string", example="Capetown, Mandela St.200"), 
 *                  )
 *              }
 *          )
*       ),

 *      @OA\Response(
 *          response=200,
 *          description="Success",
 *          @OA\JsonContent(
 *              @OA\Property(property="", type="object",
 *                  @OA\Property(property="id", type="integer", example=1), 
 *                  @OA\Property(property="name", type="string", example="Property"), 
 *                  @OA\Property(property="image", type="string"),  
 *                  @OA\Property(property="owner_id", type="integer", example=1), 
 *                  @OA\Property(property="square", type="decimal", example=100),
 *                  @OA\Property(property="square_price", type="decimal", example=8000), 
 *                  @OA\Property(property="address", type="string", example="Capetown, Mandela St.200"), 
 *              ),
 *          ),
 *      ),
 * ),
 * 
 * @OA\Get(
 *      path="/api/properties/",
 *      summary="Show Properties",
 *      tags={"Properties"},

 *      @OA\Response(
 *          response=200,
 *          description="Success",
 *          @OA\JsonContent(
 *              @OA\Property(property="", type="array", @OA\Items(
 *                  @OA\Property(property="id", type="integer", example=1), 
 *                  @OA\Property(property="name", type="string", example="Property"), 
 *                  @OA\Property(property="image", type="string"),  
 *                  @OA\Property(property="owner_id", type="integer", example=1), 
 *                  @OA\Property(property="square", type="decimal", example=100),
 *                  @OA\Property(property="square_price", type="decimal", example=8000), 
 *                  @OA\Property(property="address", type="string", example="Capetown, Mandela St.200"),
 *              )), 
 *          ),
 *      ),
 * ),
 * 
 * @OA\Get(
 *      path="/api/properties/{property}",
 *      summary="Show Property",
 *      tags={"Properties"},
 * 
 *      @OA\Parameter(
 *          description="Property ID",
 *          in="path",
 *          name="property",
 *          required=true,
 *          example=1
 *      ),

 *      @OA\Response(
 *          response=200,
 *          description="Success",
 *          @OA\JsonContent(
 *              @OA\Property(property="", type="object",
 *                  @OA\Property(property="id", type="integer", example=1), 
 *                  @OA\Property(property="name", type="string", example="Property"), 
 *                  @OA\Property(property="image", type="string"),  
 *                  @OA\Property(property="owner_id", type="integer", example=1), 
 *                  @OA\Property(property="square", type="decimal", example=100),
 *                  @OA\Property(property="square_price", type="decimal", example=8000), 
 *                  @OA\Property(property="address", type="string", example="Capetown, Mandela St.200"), 
 *              ),
 *          ),
 *      ),
 * ),
 * 
 * @OA\Patch(
 *      path="/api/properties/{property}",
 *      summary="Update Property",
 *      tags={"Properties"},
 * 
 *      @OA\Parameter(
 *          description="Property ID",
 *          in="path",
 *          name="property",
 *          required=true,
 *          example=1
 *      ),
 * 
 *      @OA\RequestBody(
 *          @OA\JsonContent(
 *              allOf={
 *                  @OA\Schema(
 *                      @OA\Property(property="name", type="string", example="Property"), 
 *                      @OA\Property(property="owner_id", type="integer", example=1), 
 *                      @OA\Property(property="image", type="string"), 
 *                      @OA\Property(property="square", type="decimal", example=100), 
 *                      @OA\Property(property="square_price", type="decimal", example=8000), 
 *                      @OA\Property(property="address", type="string", example="Capetown, Mandela St.200"), 
 *                  )
 *              }
 *          )
*       ),

 *      @OA\Response(
 *          response=200,
 *          description="Success",
 *          @OA\JsonContent(
 *              @OA\Property(property="", type="object",
 *                  @OA\Property(property="id", type="integer", example=1), 
 *                  @OA\Property(property="name", type="string", example="Property"), 
 *                  @OA\Property(property="image", type="string"),  
 *                  @OA\Property(property="owner_id", type="integer", example=1), 
 *                  @OA\Property(property="square", type="decimal", example=100),
 *                  @OA\Property(property="square_price", type="decimal", example=8000), 
 *                  @OA\Property(property="address", type="string", example="Capetown, Mandela St.200"), 
 *              ),
 *          ),
 *      ),
 * ),
 * 
 * @OA\Delete(
 *      path="/api/properties/{property}",
 *      summary="Delete Property",
 *      tags={"Properties"},
 * 
 *      @OA\Parameter(
 *          description="Property ID",
 *          in="path",
 *          name="property",
 *          required=true,
 *          example=1
 *      ),

 *      @OA\Response(
 *          response=200,
 *          description="Success",
 *          @OA\JsonContent(
 *              @OA\Property(property="message", type="string", example="done"),
 *          ),
 *      ),
 * ),
 */

class PropertyController extends Controller
{
    //
}
