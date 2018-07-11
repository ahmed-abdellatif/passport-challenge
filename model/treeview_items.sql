
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";



CREATE TABLE IF NOT EXISTS `treeview_items` (
`id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `text` varchar(200) NOT NULL,
  `parent_id` varchar(11) NOT NULL
);

INSERT INTO `treeview_items` (`id`, `name`, `text`, `parent_id`) VALUES
(1, 'node1', 'title', '0'),
(2, 'node2', 'title2', '1'),
(3, 'node3', 'title3', '2'),
(4, 'node4', 'title4', '3'),
(5, 'node5', 'title5', '4'),
(6, 'node5', 'title5', '5')



ALTER TABLE `treeview_items`
 ADD PRIMARY KEY (`id`);

ALTER TABLE `treeview_items`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
