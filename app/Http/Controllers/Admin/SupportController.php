<?php

namespace App\Http\Controllers\Admin;

use App\DTO\CreateSupportDTO;
use App\DTO\UpdateSupportDTO;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateSupport;
use App\Models\Support;
use App\Services\SupportService;
use Illuminate\Http\Request;
use stdClass;

class SupportController extends Controller
{

    public function __construct(
        protected SupportService $service
    ) {
    }
    public function index(Request $request)
    {
         $supports =  $this->service->getAll($request->filter);
 

        foreach($supports as $sup){

            $supp[] = (object) $sup;
     
        }
       

        return view('admin.supports.index', compact('supp'));
    }

    public function create()
    {
        return  view('admin/supports/create');
    }

    public function store(StoreUpdateSupport $request)
    {
        $this->service->new(
            CreateSupportDTO::makeFromRequest($request)
        );

        return redirect()->route('supports.index');
    }

    public function show(string|int $id)
    {

        if (!$support = $this->service->findOne($id)) {
            return back();
        }
        return view('admin.supports.show', compact('support'));
    }

    public function edit(string|int $id)
    {
        if (!$support = $this->service->findOne($id)) {
            return back();
        }
        return view('admin.supports.edit', compact('support'));
    }

    public function update(UpdateSupportDTO $dto, StoreUpdateSupport $request)
    {
        
        $support = $this->service->update(
            UpdateSupportDTO::makeFromRequest($request)
        );
     
        if (!$support) {
            return back();
        }

        return redirect()->route('supports.index');
    }
    public function destroy(string|int $id)
    {
        $this->service->delete($id);
        return redirect()->route('supports.index');
    }
}
