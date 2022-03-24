<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Symfony\Component\Yaml\Yaml;

class CommandPanelController extends Controller
{
    public function index()
    {
        return view('cp.index');
    }

    public function workbench()
    {
        return view('cp.workbench');
    }

    public function handleWorkbench(Request $request)
    {
        $file = $request->file('yaml_file');
        $items = Yaml::parseFile($file);
        foreach ($items as $item) {
            if (isset($item['base']['crafting'])) {
                $recipes = $item['base']['crafting'];
                if (isset($recipes['shaped'])) {
                    foreach ($recipes['shaped'] as $recipe) {
                        $materials = $this->getShapedMaterials($recipe);
                    }
                }
            }
        }
        die;
    }

    public function getShapedMaterials($recipe){
        $materials = [];
        foreach ($recipe['input'] as $input) {
            foreach (explode('|', $input) as $r){
                $materials[] = $r;
            }
        }
        return $materials;
    }

}
