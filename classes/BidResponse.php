<?php

class BidResponse {
    private $id;
    private $seatbid;
    private $bidid;

    public function __construct($id, $seatbid, $bidid) {
        $this->id = $id;
        $this->seatbid = $seatbid;
        $this->bidid = $bidid;
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getSeatbid() {
        return $this->seatbid;
    }

    public function setSeatbid($seatbid) {
        $this->seatbid = $seatbid;
    }

    public function getBidid() {
        return $this->bidid;
    }

    public function setBidid($bidid) {
        $this->bidid = $bidid;
    }

    public function toArray() {
        return [
            "id" => $this->id,
            "seatbid" => array_map(function($seat) { return $seat->toArray(); }, $this->seatbid),
            "bidid" => $this->bidid
        ];
    }

    public function toJson() {
        return json_encode($this->toArray(), JSON_PRETTY_PRINT);
    }
}

class SeatBid {
    private $seat;
    private $bid;

    public function __construct($seat, $bid) {
        $this->seat = $seat;
        $this->bid = $bid;
    }

    public function getSeat() {
        return $this->seat;
    }

    public function setSeat($seat) {
        $this->seat = $seat;
    }

    public function getBid() {
        return $this->bid;
    }

    public function setBid($bid) {
        $this->bid = $bid;
    }

    public function toArray() {
        return [
            "seat" => $this->seat,
            "bid" => array_map(function($bidItem) { return $bidItem->toArray(); }, $this->bid)
        ];
    }
}

class Bid {
    private $id;
    private $impid;
    private $price;
    private $adid;
    private $adm;
    private $adomain;
    private $cid;
    private $crid;
    private $w;
    private $h;
    private $ext;

    public function __construct($id, $impid, $price, $adid, $adm, $adomain, $cid, $crid, $w, $h, $ext) {
        $this->id = $id;
        $this->impid = $impid;
        $this->price = $price;
        $this->adid = $adid;
        $this->adm = $adm;
        $this->adomain = $adomain;
        $this->cid = $cid;
        $this->crid = $crid;
        $this->w = $w;
        $this->h = $h;
        $this->ext = $ext;
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getImpid() {
        return $this->impid;
    }

    public function setImpid($impid) {
        $this->impid = $impid;
    }

    public function getPrice() {
        return $this->price;
    }

    public function setPrice($price) {
        $this->price = $price;
    }

    public function getAdid() {
        return $this->adid;
    }

    public function setAdid($adid) {
        $this->adid = $adid;
    }

    public function getAdm() {
        return $this->adm;
    }

    public function setAdm($adm) {
        $this->adm = $adm;
    }

    public function getAdomain() {
        return $this->adomain;
    }

    public function setAdomain($adomain) {
        $this->adomain = $adomain;
    }

    public function getCid() {
        return $this->cid;
    }

    public function setCid($cid) {
        $this->cid = $cid;
    }

    public function getCrid() {
        return $this->crid;
    }

    public function setCrid($crid) {
        $this->crid = $crid;
    }

    public function getW() {
        return $this->w;
    }

    public function setW($w) {
        $this->w = $w;
    }

    public function getH() {
        return $this->h;
    }

    public function setH($h) {
        $this->h = $h;
    }

    public function getExt() {
        return $this->ext;
    }

    public function setExt($ext) {
        $this->ext = $ext;
    }

    public function toArray() {
        return [
            "id" => $this->id,
            "impid" => $this->impid,
            "price" => $this->price,
            "adid" => $this->adid,
            "adm" => $this->adm,
            "adomain" => $this->adomain,
            "cid" => $this->cid,
            "crid" => $this->crid,
            "w" => $this->w,
            "h" => $this->h,
            "ext" => $this->ext
        ];
    }
}

class Ext {
    private $app_promotion_type;
    private $impression_tracking_url;

    public function __construct($app_promotion_type, $impression_tracking_url) {
        $this->app_promotion_type = $app_promotion_type;
        $this->impression_tracking_url = $impression_tracking_url;
    }

    public function getAppPromotionType() {
        return $this->app_promotion_type;
    }

    public function setAppPromotionType($app_promotion_type) {
        $this->app_promotion_type = $app_promotion_type;
    }

    public function getImpressionTrackingUrl() {
        return $this->impression_tracking_url;
    }

    public function setImpressionTrackingUrl($impression_tracking_url) {
        $this->impression_tracking_url = $impression_tracking_url;
    }

    public function toArray() {
        return [
            "app_promotion_type" => $this->app_promotion_type,
            "impression_tracking_url" => $this->impression_tracking_url
        ];
    }
}
