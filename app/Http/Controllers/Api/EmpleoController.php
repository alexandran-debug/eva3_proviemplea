<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Empleo;
use Illuminate\Http\Request;
use OpenApi\Attributes as OA;

class EmpleoController extends Controller
{
    #[OA\Get(
        path: "/api/empleos",
        summary: "Listar empleos",
        tags: ["Empleos"],
        responses: [
            new OA\Response(
                response: 200,
                description: "Lista de empleos"
            )
        ]
    )]
    public function index()
    {
        $empleos = Empleo::all();

        return response()->json($empleos);
    }

    #[OA\Post(
        path: "/api/empleos",
        summary: "Crear empleo",
        tags: ["Empleos"],
        requestBody: new OA\RequestBody(
            required: true,
            content: new OA\JsonContent(
                required: ["titulo", "descripcion", "empresa"],
                properties: [
                    new OA\Property(property: "titulo", type: "string"),
                    new OA\Property(property: "descripcion", type: "string"),
                    new OA\Property(property: "empresa", type: "string"),
                    new OA\Property(property: "ubicacion", type: "string"),
                    new OA\Property(property: "salario", type: "number")
                ]
            )
        ),
        responses: [
            new OA\Response(
                response: 201,
                description: "Empleo creado correctamente"
            )
        ]
    )]
    public function store(Request $request)
    {
        try {

            $validated = $request->validate([
                'titulo' => 'required|string|max:255',
                'descripcion' => 'required|string',
                'empresa' => 'required|string|max:255',
                'ubicacion' => 'required|string|max:255',
                'salario' => 'required|numeric|min:0'
            ]);

            $empleo = Empleo::create($validated);

            return response()->json([
                'mensaje' => 'Empleo creado correctamente',
                'data' => $empleo
            ], 201);

        } catch (\Exception $e) {

            return response()->json([
                'mensaje' => 'Error al crear empleo',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    #[OA\Put(
        path: "/api/empleos/{id}",
        summary: "Actualizar empleo",
        tags: ["Empleos"],
        parameters: [
            new OA\Parameter(
                name: "id",
                description: "ID del empleo",
                in: "path",
                required: true,
                schema: new OA\Schema(type: "integer")
            )
        ],
        requestBody: new OA\RequestBody(
            required: true,
            content: new OA\JsonContent(
                properties: [
                    new OA\Property(property: "titulo", type: "string"),
                    new OA\Property(property: "descripcion", type: "string"),
                    new OA\Property(property: "empresa", type: "string"),
                    new OA\Property(property: "ubicacion", type: "string"),
                    new OA\Property(property: "salario", type: "number")
                ]
            )
        ),
        responses: [
            new OA\Response(
                response: 200,
                description: "Empleo actualizado correctamente"
            )
        ]
    )]
    public function update(Request $request, $id)
    {
        try {

            $empleo = Empleo::findOrFail($id);

            $validated = $request->validate([
                'titulo' => 'required|string|max:255',
                'descripcion' => 'required|string',
                'empresa' => 'required|string|max:255',
                'ubicacion' => 'required|string|max:255',
                'salario' => 'required|numeric|min:0'
            ]);

            $empleo->update($validated);

            return response()->json([
                'mensaje' => 'Empleo actualizado correctamente',
                'data' => $empleo
            ]);

        } catch (\Exception $e) {

            return response()->json([
                'mensaje' => 'Error al actualizar empleo',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    #[OA\Delete(
        path: "/api/empleos/{id}",
        summary: "Eliminar empleo",
        tags: ["Empleos"],
        parameters: [
            new OA\Parameter(
                name: "id",
                description: "ID del empleo",
                in: "path",
                required: true,
                schema: new OA\Schema(type: "integer")
            )
        ],
        responses: [
            new OA\Response(
                response: 200,
                description: "Empleo eliminado correctamente"
            )
        ]
    )]
    public function destroy($id)
    {
        try {

            $empleo = Empleo::findOrFail($id);

            $empleo->delete();

            return response()->json([
                'mensaje' => 'Empleo eliminado correctamente'
            ]);

        } catch (\Exception $e) {

            return response()->json([
                'mensaje' => 'Error al eliminar empleo',
                'error' => $e->getMessage()
            ], 500);
        }
    }
}
