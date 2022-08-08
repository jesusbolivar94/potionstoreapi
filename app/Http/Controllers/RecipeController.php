<?php

    namespace App\Http\Controllers;

    use App\Models\Potions;
    use Illuminate\Http\JsonResponse;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Validator;

    class RecipeController extends Controller
    {
        /**
         * @param Request $request
         * @return JsonResponse
         */
        public function getPotionRecipe(Request $request): JsonResponse
        {
            $parameters = $request->route()->parameters();

            $validator = Validator::make($parameters, [
                'id' => 'required|numeric|exists:Potions',
            ]);

            if ( $validator->fails() ) {
                return response()->json([
                    'message' => 'Fail data validation',
                    'details' => $validator->messages()->toArray()
                ], 400);
            }

            $id = $validator->safe()->only('id');
            $potion = Potions::find($id)->first();
            $recipe = $potion->recipes()->get();

            $data = $recipe->map(function($item) {
                unset($item->created_at);

                return $item;
            });

            return response()->json($data);
        }
    }
