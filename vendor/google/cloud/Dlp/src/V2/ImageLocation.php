<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2/dlp.proto

namespace Google\Cloud\Dlp\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Location of the finding within an image.
 *
 * Generated from protobuf message <code>google.privacy.dlp.v2.ImageLocation</code>
 */
class ImageLocation extends \Google\Protobuf\Internal\Message
{
    /**
     * Bounding boxes locating the pixels within the image containing the finding.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2.BoundingBox bounding_boxes = 1;</code>
     */
    private $bounding_boxes;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Dlp\V2\BoundingBox[]|\Google\Protobuf\Internal\RepeatedField $bounding_boxes
     *           Bounding boxes locating the pixels within the image containing the finding.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Privacy\Dlp\V2\Dlp::initOnce();
        parent::__construct($data);
    }

    /**
     * Bounding boxes locating the pixels within the image containing the finding.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2.BoundingBox bounding_boxes = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getBoundingBoxes()
    {
        return $this->bounding_boxes;
    }

    /**
     * Bounding boxes locating the pixels within the image containing the finding.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2.BoundingBox bounding_boxes = 1;</code>
     * @param \Google\Cloud\Dlp\V2\BoundingBox[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setBoundingBoxes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dlp\V2\BoundingBox::class);
        $this->bounding_boxes = $arr;

        return $this;
    }

}

