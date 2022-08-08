<?php

    namespace App\Http\Controllers;

    use App\Models\Potions;
    use Illuminate\Http\JsonResponse;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Validator;

    class PotionController extends Controller
    {
        /**
         * @param Request $request
         * @return JsonResponse
         */
        public function getPotion(Request $request): JsonResponse
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

            return response()->json($potion->only(['id', 'name', 'crafting_cost']));
        }

        /**
         * @return JsonResponse
         */
        public function getPotions(): JsonResponse
        {
            $potions = Potions::all();

            return response()->json($potions);
        }
    }
