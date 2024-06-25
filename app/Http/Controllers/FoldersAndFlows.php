<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Folders;
use App\Models\Flows;

class FoldersAndFlows extends Controller
{
        public function getFoldersAndFlows()
        {
            // uso de eager loading para relacionar los folders con sus respectivos flows 
            $folders = Folders::with('flows')->get();

            $Flows = Flows::whereNull('folder_uuid')->get();

            return response()->json([
                'folders' => $folders,
                'flows' => $Flows,
            ], 200);
        }
}