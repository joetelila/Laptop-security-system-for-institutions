<?php 

namespace Josseph\SqlFetcher;

use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Str;
class Migration {
	protected $files;

	protected $fileName;

	public function __construct(Filesystem $files , $fileName = "" ) {
		$this->files = $files;
		$this->fileName = $this->getFilePath();
		$this->readFileContent();
	}


	public function readFileContent() {

		$this->content = $this->files->get(base_path($this->fileName));
		$this->getTableName($this->content);

	}

	public function getFilePath() {
		$allFiles  = $this->files->files(base_path());

		foreach ($allFiles as $filee) {
			if($this->files->extension($filee) == "sql") {
				return $filee->getFileNameWithOutExtension() . ".sql";
			}
		}
		return "";
	}

	public function getTableName($content) {
		$fieldsAndNames =Str::between($content , "CREATE TABLE " , "ENGINE");
		
		// Table Name 
		preg_match("/\w+/", $fieldsAndNames , $match);
		// $fields = Str::between($fieldsAndNames , )


		$fieldsAndProperties  = Str::afterLast($fieldsAndNames , $match[0]);
		
		$fieldsAndProperties = Str::replaceLast(")" , "" , $fieldsAndProperties);
		
		$fieldsAndProperties = Str::replaceFirst("(" , "" , $fieldsAndProperties);
		
		$fieldsAndProperties = Str::of($fieldsAndProperties)->replace("\r\n" , "");
		
		dd(explode(',', $fieldsAndProperties));
		
		dd($fieldsAndProperties);

		dd($content);
		preg_match_all("/CREATE TABLE `(\w+)` \(*/", $content , $matches , PREG_OFFSET_CAPTURE);
		preg_match_all("/ENGINE/", $content, $matche2 , PREG_OFFSET_CAPTURE);
		// preg_match_all("/\)/" , );
		dd($matches , $matche2);
		$this->tableName = $matches[1][0];
		dd($this->tableName);

		dd(Str::contains($content , 'CREATE'));

		
	}

	public function get_content() {
		return "Hello world ";
	}
}