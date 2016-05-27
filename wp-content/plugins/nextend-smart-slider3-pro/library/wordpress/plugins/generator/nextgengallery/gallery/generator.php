<?php

class N2GeneratorNextGENGalleryGallery extends N2GeneratorAbstract
{

    protected function _getData($count, $startIndex) {
        global $wpdb;

        $data = array();

        $images = $wpdb->get_results("SELECT a.*, b.path FROM " . $wpdb->base_prefix . "ngg_pictures AS a LEFT JOIN " . $wpdb->base_prefix . "ngg_gallery AS b ON a.galleryid = b.gid WHERE a.galleryid = '" . intval($this->data->get('gallery', 0)) . "' ORDER BY a.sortorder LIMIT " . $startIndex . ", " . $count);

        $i = 0;
        if (class_exists('nggGallery') && !class_exists('C_Component_Registry')) { // legacy

            foreach ($images as $image) {
                $data[$i]['image']     = N2ImageHelper::dynamic(nggGallery::get_image_url($image->pid, $image->path, $image->filename));
                $data[$i]['thumbnail'] = N2ImageHelper::dynamic(nggGallery::get_thumbnail_url($image->pid, $image->path, $image->filename));
                $data[$i]['title']     = $image->alttext;

                $i++;
            }
        } else {

            $storage = C_Component_Registry::get_instance()
                                           ->get_utility('I_Gallery_Storage');

            foreach ($images as $image) {
                $data[$i]['image']     = N2ImageHelper::dynamic($storage->get_image_url($image));
                $data[$i]['thumbnail'] = N2ImageHelper::dynamic($storage->get_thumbnail_url($image));
                $data[$i]['title']     = $image->alttext;

                $i++;
            }
        }
        return $data;
    }
}