Write a recursive php function to parse and return a string containing the path to each leaf in the tree structure $tree in tree.php.  The $tree structure is made of TreeNode objects.  Output should be a list of ASCII node names separated by periods in the same order they appear in $tree.  Each path should be on its own line, with a "\n" character at the end of each line.  Example output:

rbm.tech.development
rbm.tech.operations

The function will be called "print_tree", its first parameter will be a TreeNode object and the function will return a string.  The function is to be placed in a file called "parse_tree.php".  It will be able to be called in the following way:

$output_string = print_tree( $tree );

To test the function, simply run tree.php, making sure parse_tree.php and tree_serialized.txt are in the same directory (from the command line, run "php tree.php").  It will show the output and a SHA1 hash.  It would be good if the hash was "21a45fd2fec646e03cecb87e340851ea609cc811".