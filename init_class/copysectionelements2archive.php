<?

class ModClass
{
    function OnAfterIBlockSectionUpdateHandler(&$arFields)
    {

        if ($arFields['UF_ARCHIVE'][1]==1){
                
            $bs = new CIBlockSection;
            
            $arF = Array(
                "IBLOCK_ID" => 6,
				"NAME" => $arFields['NAME']." ".date("Y-m-d H:i:s"),
                "SORT" => $arFields['SORT'],
                "DESCRIPTION" => $arFields['DESCRIPTION'],
                "DESCRIPTION_TYPE" => $arFields['DESCRIPTION_TYPE'],
                "XML_ID" => $arFields['ID']
            );
            
            $arIBTYPE = CIBlockType::GetByIDLang($type, LANGUAGE_ID);

  $rsSect = CIBlockSection::GetList(Array($by=>$order), array("XML_ID"=>$arFields['ID'],"IBLOCK_ID"=>6), true);
        
        if ($rsSect->Fetch()){

        }
        else {
            $sectId = $bs->Add($arF);
        }

    
        if($sectId){
            
        
            
            $res = CIBlockElement::GetList(Array(), array("IBLOCK_ID"=>$arFields['IBLOCK_ID'], "IBLOCK_SECTION_ID"=>$arFields['ID']), false, false, array("ID","NAME","PROPERTY_MARK","PROPERTY_MODEL","PROPERTY_PHOTO"));

            while($ar = $res->GetNext()){
                
                        $el = new CIBlockElement;
                        
                        $PROP = array();
                        
                        $PROP["MARK"] = $ar['PROPERTY_MARK_VALUE'];
                        $PROP["MODEL"] = $ar['PROPERTY_MODEL_VALUE'];
                        $PROP["PHOTO"] = $ar['PROPERTY_PHOTO_VALUE'];
                        
                        
                        $arLoadProductArray = Array(
                          "IBLOCK_SECTION_ID" => $sectId,
                          "IBLOCK_ID"      => 6,
                          "PROPERTY_VALUES"=> $PROP,
                          "NAME"           => $ar["NAME"]." - архивная копия от ".date("Y-m-d")
                          );

                        
                        $id = $el->Add($arLoadProductArray);
                        
                        if ($id){
                            
                        } else {
                  echo "Error: ".$el->LAST_ERROR; die ();
}
            }
            
            
        }

        }
    }
}

?>
