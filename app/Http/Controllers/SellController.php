<?php

    namespace App\Http\Controllers;

    use App\Models\Sells;
    use App\Models\SellsItems;
    use Illuminate\Http\JsonResponse;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Validator;

    class SellController extends Controller
    {
        /**
         * @return JsonResponse
         */
        public function getSells(): JsonResponse
        {
            $sells = Sells::all();

            return response()->json($sells);
        }

        /**
         * @param Request $request
         * @return JsonResponse
         */
        public function getSell(Request $request): JsonResponse
        {
            $parameters = $request->route()->parameters();

            $validator = Validator::make($parameters, [
                'id' => 'required|numeric|exists:Sells',
            ]);

            if ( $validator->fails() ) {
                return response()->json([
                    'message' => 'Fail data validation',
                    'details' => $validator->messages()->toArray()
                ], 400);
            }

            $id = $validator->safe()->only('id');
            $sell = Sells::find($id)->first();

            return response()->json($sell);
        }

        /**
         * @param Request $request
         * @return JsonResponse
         */
        public function getSellDetail(Request $request): JsonResponse
        {
            $parameters = $request->route()->parameters();

            $validator = Validator::make($parameters, [
                'id' => 'required|numeric|exists:Sells',
            ]);

            if ( $validator->fails() ) {
                return response()->json([
                    'message' => 'Fail data validation',
                    'details' => $validator->messages()->toArray()
                ], 400);
            }

            $id = $validator->safe()->only('id');
            $sell = Sells::find($id)->first();
            $items = $sell->items();
            $data = $items->get();

            if ( $items->count() == 1 ) {
                $data = $items->first();
            }

            return response()->json($data);
        }
    }
