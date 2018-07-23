

CREATE TABLE IF NOT EXISTS `tree_nodes` (
`id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `text` varchar(200) NOT NULL,
  `parent_id` varchar(11) NOT NULL,
  PRIMARY KEY (id)
);

INSERT INTO `tree_nodes` (`id`, `name`, `text`, `parent_id`) VALUES
(1, 'node1', 'factory', '0'),
(2, 'node2', 'factory2', '1'),
(3, 'node3', 'factory3', '2'),
(4, 'node4', 'factory4', '3'),
(5, 'node5', 'factory5', '4'),
(6, 'node5', 'factory5', '5')



ALTER TABLE `tree_nodes`
 ADD PRIMARY KEY (`id`);

ALTER TABLE `tree_nodes`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
