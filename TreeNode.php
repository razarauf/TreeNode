<?php

/**
 *  Tree Node Class
 *
 *  This class represents a Node. A Node has a name
 *  and one or more children. By linking nodes together,
 *  one can create a Tree data structure.
 *
 *  @author Scott Small <scott.small@redbrickmedia.com>
 *  @copyright 2015 Red Brick Media
 *  @package RedBrick\DevTest
 *  @version 1.0.0
 */

namespace RedBrick\DevTest;
 
class TreeNode
{
    
    /**
     *  The name of the node.
     *
     *  @var string
     *  @access private
     */
    private $_name = null;
    
    
    /**
     *  A list of the node's children.
     *
     *  @var array
     *  @access private
     */
    private $_children = array();

    
    /**
     *  Constructor Function
     *
     *  @access public
     *  @param string $name The name of the node.
     *  @return TreeNode
     */
    public function __construct( $name )
    {
        $this->_name = $name;
    }
    
    
    /**
     *  Returns the name of the node.
     *
     *  @access public
     *  @return string
     */
    public function getName()
    {
        return $this->_name;
    }
    
    
    /**
     *  Returns true if this node is a leaf (has no children),
     *  returns false if this node is not a leaf.
     *
     *  @access public
     *  @return boolean
     */
    public function isLeaf()
    {
        return !count( $this->_children );
    }
    
    
    /**
     *  Returns an array of children in the order they were entered
     *
     *  @access public
     *  @return array
     */
    public function getChildArray()
    {
        return $this->_children;
    }
    
    
    /**
     *  Adds a child to the node
     *
     *  @param TreeNode $child_node The node to add as a child
     *  @return TreeNode
     */
    public function addChild( TreeNode $child_node )
    {
        $this->_children[] = $child_node;
        return $this;
    }
    
}