<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BranchInfo;
use Illuminate\Support\Facades\Gate;

class BranchInfoController extends Controller
{

    public function branchinfo()
    {

        return view('pages.hr.branchinfo.index');
    }

    public function branchinfoAdd()
    {
        abort_unless(Gate::allows('hr_access'), 404);

        return view('pages.hr.branchinfo.add.index');
    }

    public function branchinfoStore(Request $request)
    {
        abort_unless(Gate::allows('hr_access'), 404);

        try {
            // $request->validate([
            //     'image' => 'required|image|max:2048', // Validate that the file is an image and max size is 2MB
            // ]);
            // Get the uploaded file
            $image = $request->file('image');

            $branchinfo = new BranchInfo();
            $branchinfo->company_name = $request->company_name;
            $branchinfo->address = $request->address;
            $branchinfo->tel_no = $request->tel_no;
            if ($image) {
                // Convert the image to base64
                $imageBase64 = base64_encode(file_get_contents($image));
                $branchinfo->image = $imageBase64;
            }
            $branchinfo->save();
    
            return redirect(route("branchinfo.index"))->with('success', 'Branch Information Created Successfully');
        } catch (\Throwable $th) {
            return redirect(route("branchinfo.index"))->with('warning', $th->getMessage());
        }

    }

}
