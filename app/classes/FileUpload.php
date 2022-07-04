<?php

namespace App\classes;

class FileUpload
{
    protected $filename;
    protected $max_file_size = 2097152;
    protected $extension;
    protected $path;

    //get file name
    public function getName()
    {
        return $this->filename;
    }

    //set file name
    protected function setName($file, $name = '')
    {
        if ($name === '') {
            $name = pathinfo($file, PATHINFO_FILENAME);
        }
        $name = strtolower(str_replace(['_', ' '], '-', $name));
        $hash = md5(mcrotime());
        $ext = $this->fileExtension();

        $this->filename = "{$name}-{$hash}.{$ext}";
    }

    //set file extension
    protected function fileExtension($file)
    {
        return $this->extension = pathinfo($file, PATHINFO_EXTENSION);
    }

    //validate file size
    public static function fileSize($file)
    {
        $file_object = new static();
        return $file > $file_object->max_file_size ? true : false;
    }

    //validate image format
    public static function isImage($file)
    {
        $file_object = new static();
        $extension = $file_object->fileExtension($file);
        $valid_extensions = ['jpg', 'jpeg', 'bmp', 'gif'];

        if (!in_array(strtolower($extension), $valid_extesions)) {
            return false;
        }
        return true;
    }

    //get path where file was uploaded
    public function path()
    {
        return $this->path;
    }

    //move the file to intended location
    public static function move($temp_path, $targe_folder, $file, $new_filename){
        $file_object = new static;
        $separator = DIRECTORY_SEPARATOR;
    
        $file_object->setName($file, $new_filename);
        $file_name = $file_object->getName();

        if(!is_dir($targe_folder)){
            mkdir($targe_folder, 0777, true);
        }

        $file_object->path = "{$targe_folder}{$separator}{$file_name}";
        $absolute_path = BASE_PATH."{$separator}public{$separator}$file_object->path";

        if(move_uploaded_file($temp_path, $absolute_path)){
            return $file_object;
        }
        return null;
    }
}
