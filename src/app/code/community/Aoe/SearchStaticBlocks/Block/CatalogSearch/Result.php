<?php

class Aoe_SearchStaticBlocks_Block_CatalogSearch_Result extends Mage_CatalogSearch_Block_Result
{
    public function getStaticBlocksFromQuery() {
        $blocks = array();
        $blocksList = $this->_getQuery()->getStaticBlocks();

        if (trim($blocksList, " ,") != "") {
            $blocks = explode(",", $blocksList);
        }
        return $blocks;
    }

    public function getQueryStaticBlocksHtml() {
        $html = "";
        $blocks =$this->getStaticBlocksFromQuery();
        foreach ($blocks as $blockName) {
            $html .= $this->getLayout()->createBlock('cms/block')->setBlockId($blockName)->toHtml();
        }
        return $html;
    }
}
