<?php

/**
 *  Parse Tree script
 *
 * 	The file contains functions that parse nodes
 *  from a TreeNode object and returns 
 *  the parsed nodes as a string.
 *
 *  @author Raza Rauf <m.razarauf@gmail.com>
 *  @copyright 2017 Raza Rauf
 *  @version 1.0.0
 */


/**
 * The string contains the parsed tree.
 *
 * @global string $GLOBALS['STRING_TO_RETURN']
 */
$GLOBALS['STRING_TO_RETURN'] = "";

/**
 *  Print Tree Function
 *
 *  @access public
 *  @param TreeNode $treeRoot The root of the tree.
 *  @return string
 */
function print_tree($treeRoot)
{
	$treeArray = $treeRoot->getChildArray ();
	print_tree_helper($treeArray, $treeRoot->getName());
	return $GLOBALS['STRING_TO_RETURN'];
}

/**
 *  Print Tree Helper function.
 *
 *  @access public
 *  @param array $treeNodeArray The first child array of the TreeNode object
 *  @param string $nameofNode Parsed nodes' names
 *  @return string
 */
function print_tree_helper($treeNodeArray, $nameofNode)
{
	for ($indexOfElement=0; $indexOfElement < sizeof($treeNodeArray); $indexOfElement++)
	{
		$tmpNameOfNode = $nameofNode.".".$treeNodeArray[$indexOfElement]->getName();

		if (sizeof($treeNodeArray[$indexOfElement]->getChildArray ()) != 0)
		{
			print_tree_helper($treeNodeArray[$indexOfElement]->getChildArray (), $tmpNameOfNode);
		}
		else
		{
			$GLOBALS['STRING_TO_RETURN'] .= $tmpNameOfNode."\n";
		}
	}
}

?>