<?php

    namespace App\Http\Controllers;

    use App\Models\Ingredients;
    use Illuminate\Http\JsonResponse;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Validator;

    class IngredientController extends Controller
    {
        /**
         * @return JsonResponse
         */
        public function getIngredients(): JsonResponse
        {
            $ingredients = Ingredients::all()
                ->map(fn($ingredient) => $ingredient->only(['id', 'name', 'stock', 'price']));

            return response()->json($ingredients);
        }

        /**
         * @param Request $request
         * @return JsonResponse
         */
        public function getIngredient(Request $request): JsonResponse
        {
            $parameters = $request->route()->parameters();

            $validator = Validator::make($parameters, [
                'id' => 'required|numeric|exists:Ingredients',
            ]);

            if ( $validator->fails() ) {
                return response()->json([
                    'message' => 'Fail data validation',
                    'details' => $validator->messages()->toArray()
                ], 400);
            }

            $id = $validator->safe()->only('id');
            $ingredient = Ingredients::find($id)->first();

            return response()->json($ingredient);
        }
    }
