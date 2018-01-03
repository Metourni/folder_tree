<?php
/**
 * Created by PhpStorm.
 * User: Metourni Noureddine
 * Date: 03/01/2018
 * Time: 20:52
 */

class Dfa
{
    public function getFolderTree($folder)
    {
        $tree = [];
        //get the list of elements in the folder
        $files = scandir($folder);
        //deleting the (.) & (..) from the list of the folder to remove the infinity loop.
        unset($files[array_search('.', $files, true)]);
        unset($files[array_search('..', $files, true)]);
        //if there is no files or folder in the folder.
        if (count($files) < 1)
            return [];
        foreach ($files as $file) {
            if (is_dir($folder . '/' . $file)) {
                array_push($tree, ['/' . $file, $this->getFolderTree($folder . '/' . $file)]);
            } else {
                array_push($tree, $file);
            }
        }
        return $tree;
    }

}