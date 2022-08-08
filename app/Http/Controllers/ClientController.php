<?php

    namespace App\Http\Controllers;

    use App\Models\Clients;
    use Illuminate\Http\JsonResponse;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Validator;

    class ClientController extends Controller
    {
        /**
         * @param Request $request
         * @return JsonResponse
         */
        public function getClient(Request $request): JsonResponse
        {
            $parameters = $request->route()->parameters();

            $validator = Validator::make($parameters, [
                'id' => 'required|numeric|exists:Clients',
            ]);

            if ( $validator->fails() ) {
                return response()->json([
                    'message' => 'Fail data validation',
                    'details' => $validator->messages()->toArray()
                ], 400);
            }

            $id = $validator->safe()->only('id');
            $client = Clients::find($id)->first();

            return response()->json($client);
        }

        /**
         * @return JsonResponse
         */
        public function getClients(): JsonResponse
        {
            $clients = Clients::all();

            return response()->json($clients);
        }

        /**
         * @param Request $request
         * @return JsonResponse
         */
        public function newClient(Request $request): JsonResponse
        {
            $validator = Validator::make($request->all(), [
                'client_name' => 'required|string|unique:Clients|max:200',
            ]);

            if ( $validator->fails() ) {
                return response()->json([
                    'message' => 'Fail data validation',
                    'details' => $validator->messages()->toArray()
                ], 400);
            }

            $data = $validator->safe();

            $client = Clients::create(['client_name' => $data['client_name']]);

            return response()->json([
                'id' => $client->id,
                'client_name' => $client->client_name,
                'created_at' => $client->created_at->format('Y-m-d H:i:s')
            ], 201);
        }

        /**
         * @param Request $request
         * @return JsonResponse
         */
        public function updateClient(Request $request): JsonResponse
        {
            $parameters = $request->route()->parameters();
            $data = $request->all();

            $paramsValidator = Validator::make($parameters, [
                'id' => 'required|numeric|exists:Clients',
            ]);

            if ( $paramsValidator->fails() ) {
                return response()->json([
                    'message' => 'Fail data validation',
                    'details' => $paramsValidator->messages()->toArray()
                ], 400);
            }

            $dataValidator = Validator::make($data, [
                'client_name' => 'required|string|unique:Clients|max:200',
            ]);

            if ( $dataValidator->fails() ) {
                return response()->json([
                    'message' => 'Fail data validation',
                    'details' => $dataValidator->messages()->toArray()
                ], 400);
            }

            $id = $paramsValidator->safe()->only('id');
            $safeData = $dataValidator->safe()->all();

            $client = Clients::where('id', $id);
            $client->first()->update([
                'client_name' => $safeData['client_name'],
                'updated_at' => now()
            ]);

            $updatedClient = Clients::find($id)->first();

            return response()->json([
                'id' => $updatedClient->id,
                'client_name' => $updatedClient->client_name,
                'created_at' => $updatedClient->created_at->format('Y-m-d H:i:s'),
                'updated_at' => $updatedClient->updated_at->format('Y-m-d H:i:s')
            ]);
        }

        /**
         * @param Request $request
         * @return JsonResponse
         */
        public function deleteClient(Request $request): JsonResponse
        {
            $parameters = $request->route()->parameters();

            $validator = Validator::make($parameters, [
                'id' => 'required|numeric|exists:Clients',
            ]);

            if ( $validator->fails() ) {
                return response()->json([
                    'message' => 'Fail data validation',
                    'details' => $validator->messages()->toArray()
                ], 400);
            }

            $id = $validator->safe()->only('id');

            Clients::destroy($id);

            return response()->json([], 204);
        }
    }
