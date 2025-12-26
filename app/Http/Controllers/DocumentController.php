<?php

namespace App\Http\Controllers;

use App\Helper\ResponseFormatter;
use Illuminate\Http\Request;
use App\Models\Documents;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables;


class DocumentController extends Controller
{
    public function create(Request $request)
    {
        try {
            $rules = [
                'title' => 'required|string',
                'documentType' => 'required|string',
                'url' => 'required|file|max:5120', // 5MB
            ];
            $validation = Validator::make($request->all(), $rules);

            if ($validation->fails()) {
                return ResponseFormatter::error(
                    $validation->errors(),
                    'Validation Error'
                );
            }
            if($request->file('url'))
            {
                $file = $request->file('url');
                $filename = time() . '_' . $file->getClientOriginalName();
                $file->move('documentItems', $filename);

                Documents::create([
                    'title' => $request->title,
                    'documentType' => $request->documentType,
                    'url' => 'documentItems/' . $filename,
                ]);
                return redirect('/documents')->with('success', 'Registrasi berhasil.');
            }
        } catch (\Exception $exception) {
            return redirect('/documents')
                ->with('error', $exception->getMessage());
        }
    }

    public function datatable(Request $request)
    {
        $query = Documents::query();

            if ($request->documentType) {
                $query->where('documentType', $request->documentType);
            }

            return DataTables::of($query)
                ->addIndexColumn()
                ->editColumn('created_at', fn($r) => $r->created_at->format('Y-m-d'))
                ->editColumn('updated_at', fn($r) => $r->updated_at->format('Y-m-d'))
                ->addColumn('action', function ($row) {

                    return '
                    <div class="flex justify-center gap-2">
                        <button onclick="previewPdf(\''.asset($row->url).'\')"
                            class="px-3 py-1 bg-blue-600 text-white rounded hover:bg-blue-700">
                            👁
                        </button>
                        <a href="'.asset($row->url).'" download
                        class="px-3 py-1 bg-green-600 text-white rounded hover:bg-green-700">
                        ⬇️
                        </a>
                    </div>';
                })
                ->rawColumns(['action'])
                ->make(true);
    }
    public function index()
    {
        return view('documents.documents');
    }
}
