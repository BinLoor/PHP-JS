<?php
class File implements iFile
{
    private $filePath;
    public function __construct($filePath)
    {
        $this->filePath = $filePath;
    }
    public function getPath()
    {
        return realpath($this->filePath);
    }
    public function getDir()
    {
        return pathinfo($this->getPath())['dirname'];
    }
    public function getName()
    {
        return pathinfo($this->getPath())['filename'];
    }
    public function getExt()
    {
        return pathinfo($this->getPath())['extension'];
    }
    public function getSize()
    {
        if (file_exists($this->filePath)) {
            return filesize($this->filePath);
        }
    }

    public function getText()
    {
        return file_get_contents($this->filePath);
    }
    public function setText($text)
    {
        file_put_contents($this->filePath, $text);
    }
    public function appendText($text)
    {
        file_put_contents($this->filePath, $this->getText(). $text);
    }

    public function copy($copyPath)
    {
        copy($this->filePath, $copyPath);
    }
    public function delete()
    {
        unlink($this->filePath);
    }
    public function rename($newName)
    {
        rename($this->filePath, $newName);
    }
    public function replace($newPath)
    {
        rename($this->filePath, "$newPath/$this->filePath");
    }
} 
?>