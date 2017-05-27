<html>
    <body>
        Welcome <?php echo $_POST["name"]; ?>
        <br>
        Your email address is: <?php echo $_POST["email"]; ?>
        <?php
            if(empty($_POST['submit']))
            {
            	echo "Form is not submitted!";
            	exit;
            }
            if(empty($_POST["name"]) ||
            	empty($_POST["email"]))
            	{
            		echo "Please fill the form";
            		exit;
            	}
            $name = $_POST["name"];
            $mail = $_POST["email"];
            addInfoToXml( __DIR__."/database/database.xml", "Infos", "Info", $name, $mail);

            function addInfoToXml( $path, $parent, $child, $name, $mail ){
                $path=file_exists( realpath( $path ) ) ? realpath( $path ) : false;
                clearstatcache();
                if( $path ){
                    $doc = new DOMDocument();
                    $doc->formatOutput = true;
                    $doc->preserveWhiteSpace=true;
                    $doc->load( $path );
                    $root = $doc->getElementsByTagName( $parent )->item(0);
                    if( $root ){
                        $info = $doc->createElement( $child );
                        $info->setAttribute("name",$name);
                        $info->setAttribute("mail",$mail);
                        $info = $root->appendChild($info);
                        $doc->save($path);
                    }
                } else {
                    echo "error: incorrect path to xml file";   
                }
            }
        ?>
    </body>
</html> 