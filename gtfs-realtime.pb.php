<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: gtfs-realtime.proto3

namespace Transit_realtime;

use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class FeedMessage extends \Google\Protobuf\Internal\Message
{
    private $header = null;
    private $entity;

    public function getHeader()
    {
        return $this->header;
    }

    public function setHeader(&$var)
    {
        GPBUtil::checkMessage($var, \Transit_realtime\FeedHeader::class);
        $this->header = $var;
    }

    public function getEntity()
    {
        return $this->entity;
    }

    public function setEntity(&$var)
    {
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Transit_realtime\FeedEntity::class);
        $this->entity = $var;
    }

}

class FeedHeader extends \Google\Protobuf\Internal\Message
{
    private $gtfs_realtime_version = '';
    private $incrementality = 0;
    private $timestamp = 0;

    public function getGtfsRealtimeVersion()
    {
        return $this->gtfs_realtime_version;
    }

    public function setGtfsRealtimeVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->gtfs_realtime_version = $var;
    }

    public function getIncrementality()
    {
        return $this->incrementality;
    }

    public function setIncrementality($var)
    {
        GPBUtil::checkEnum($var, \Transit_realtime\FeedHeader_Incrementality::class);
        $this->incrementality = $var;
    }

    public function getTimestamp()
    {
        return $this->timestamp;
    }

    public function setTimestamp($var)
    {
        GPBUtil::checkUint64($var);
        $this->timestamp = $var;
    }

}

class FeedHeader_Incrementality
{
    const FULL_DATASET = 0;
    const DIFFERENTIAL = 1;
}

class FeedEntity extends \Google\Protobuf\Internal\Message
{
    private $id = '';
    private $is_deleted = false;
    private $trip_update = null;
    private $vehicle = null;
    private $alert = null;

    public function getId()
    {
        return $this->id;
    }

    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;
    }

    public function getIsDeleted()
    {
        return $this->is_deleted;
    }

    public function setIsDeleted($var)
    {
        GPBUtil::checkBool($var);
        $this->is_deleted = $var;
    }

    public function getTripUpdate()
    {
        return $this->trip_update;
    }

    public function setTripUpdate(&$var)
    {
        GPBUtil::checkMessage($var, \Transit_realtime\TripUpdate::class);
        $this->trip_update = $var;
    }

    public function getVehicle()
    {
        return $this->vehicle;
    }

    public function setVehicle(&$var)
    {
        GPBUtil::checkMessage($var, \Transit_realtime\VehiclePosition::class);
        $this->vehicle = $var;
    }

    public function getAlert()
    {
        return $this->alert;
    }

    public function setAlert(&$var)
    {
        GPBUtil::checkMessage($var, \Transit_realtime\Alert::class);
        $this->alert = $var;
    }

}

class TripUpdate extends \Google\Protobuf\Internal\Message
{
    private $trip = null;
    private $vehicle = null;
    private $stop_time_update;
    private $timestamp = 0;
    private $delay = 0;

    public function getTrip()
    {
        return $this->trip;
    }

    public function setTrip(&$var)
    {
        GPBUtil::checkMessage($var, \Transit_realtime\TripDescriptor::class);
        $this->trip = $var;
    }

    public function getVehicle()
    {
        return $this->vehicle;
    }

    public function setVehicle(&$var)
    {
        GPBUtil::checkMessage($var, \Transit_realtime\VehicleDescriptor::class);
        $this->vehicle = $var;
    }

    public function getStopTimeUpdate()
    {
        return $this->stop_time_update;
    }

    public function setStopTimeUpdate(&$var)
    {
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Transit_realtime\TripUpdate_StopTimeUpdate::class);
        $this->stop_time_update = $var;
    }

    public function getTimestamp()
    {
        return $this->timestamp;
    }

    public function setTimestamp($var)
    {
        GPBUtil::checkUint64($var);
        $this->timestamp = $var;
    }

    public function getDelay()
    {
        return $this->delay;
    }

    public function setDelay($var)
    {
        GPBUtil::checkInt32($var);
        $this->delay = $var;
    }

}

class TripUpdate_StopTimeEvent extends \Google\Protobuf\Internal\Message
{
    private $delay = 0;
    private $time = 0;
    private $uncertainty = 0;

    public function getDelay()
    {
        return $this->delay;
    }

    public function setDelay($var)
    {
        GPBUtil::checkInt32($var);
        $this->delay = $var;
    }

    public function getTime()
    {
        return $this->time;
    }

    public function setTime($var)
    {
        GPBUtil::checkInt64($var);
        $this->time = $var;
    }

    public function getUncertainty()
    {
        return $this->uncertainty;
    }

    public function setUncertainty($var)
    {
        GPBUtil::checkInt32($var);
        $this->uncertainty = $var;
    }

}

class TripUpdate_StopTimeUpdate extends \Google\Protobuf\Internal\Message
{
    private $stop_sequence = 0;
    private $stop_id = '';
    private $arrival = null;
    private $departure = null;
    private $schedule_relationship = 0;

    public function getStopSequence()
    {
        return $this->stop_sequence;
    }

    public function setStopSequence($var)
    {
        GPBUtil::checkUint32($var);
        $this->stop_sequence = $var;
    }

    public function getStopId()
    {
        return $this->stop_id;
    }

    public function setStopId($var)
    {
        GPBUtil::checkString($var, True);
        $this->stop_id = $var;
    }

    public function getArrival()
    {
        return $this->arrival;
    }

    public function setArrival(&$var)
    {
        GPBUtil::checkMessage($var, \Transit_realtime\TripUpdate_StopTimeEvent::class);
        $this->arrival = $var;
    }

    public function getDeparture()
    {
        return $this->departure;
    }

    public function setDeparture(&$var)
    {
        GPBUtil::checkMessage($var, \Transit_realtime\TripUpdate_StopTimeEvent::class);
        $this->departure = $var;
    }

    public function getScheduleRelationship()
    {
        return $this->schedule_relationship;
    }

    public function setScheduleRelationship($var)
    {
        GPBUtil::checkEnum($var, \Transit_realtime\TripUpdate_StopTimeUpdate_ScheduleRelationship::class);
        $this->schedule_relationship = $var;
    }

}

class TripUpdate_StopTimeUpdate_ScheduleRelationship
{
    const SCHEDULED = 0;
    const SKIPPED = 1;
    const NO_DATA = 2;
}

class VehiclePosition extends \Google\Protobuf\Internal\Message
{
    private $trip = null;
    private $vehicle = null;
    private $position = null;
    private $current_stop_sequence = 0;
    private $stop_id = '';
    private $current_status = 0;
    private $timestamp = 0;
    private $congestion_level = 0;
    private $occupancy_status = 0;

    public function getTrip()
    {
        return $this->trip;
    }

    public function setTrip(&$var)
    {
        GPBUtil::checkMessage($var, \Transit_realtime\TripDescriptor::class);
        $this->trip = $var;
    }

    public function getVehicle()
    {
        return $this->vehicle;
    }

    public function setVehicle(&$var)
    {
        GPBUtil::checkMessage($var, \Transit_realtime\VehicleDescriptor::class);
        $this->vehicle = $var;
    }

    public function getPosition()
    {
        return $this->position;
    }

    public function setPosition(&$var)
    {
        GPBUtil::checkMessage($var, \Transit_realtime\Position::class);
        $this->position = $var;
    }

    public function getCurrentStopSequence()
    {
        return $this->current_stop_sequence;
    }

    public function setCurrentStopSequence($var)
    {
        GPBUtil::checkUint32($var);
        $this->current_stop_sequence = $var;
    }

    public function getStopId()
    {
        return $this->stop_id;
    }

    public function setStopId($var)
    {
        GPBUtil::checkString($var, True);
        $this->stop_id = $var;
    }

    public function getCurrentStatus()
    {
        return $this->current_status;
    }

    public function setCurrentStatus($var)
    {
        GPBUtil::checkEnum($var, \Transit_realtime\VehiclePosition_VehicleStopStatus::class);
        $this->current_status = $var;
    }

    public function getTimestamp()
    {
        return $this->timestamp;
    }

    public function setTimestamp($var)
    {
        GPBUtil::checkUint64($var);
        $this->timestamp = $var;
    }

    public function getCongestionLevel()
    {
        return $this->congestion_level;
    }

    public function setCongestionLevel($var)
    {
        GPBUtil::checkEnum($var, \Transit_realtime\VehiclePosition_CongestionLevel::class);
        $this->congestion_level = $var;
    }

    public function getOccupancyStatus()
    {
        return $this->occupancy_status;
    }

    public function setOccupancyStatus($var)
    {
        GPBUtil::checkEnum($var, \Transit_realtime\VehiclePosition_OccupancyStatus::class);
        $this->occupancy_status = $var;
    }

}

class VehiclePosition_VehicleStopStatus
{
    const INCOMING_AT = 0;
    const STOPPED_AT = 1;
    const IN_TRANSIT_TO = 2;
}

class VehiclePosition_CongestionLevel
{
    const UNKNOWN_CONGESTION_LEVEL = 0;
    const RUNNING_SMOOTHLY = 1;
    const STOP_AND_GO = 2;
    const CONGESTION = 3;
    const SEVERE_CONGESTION = 4;
}

class VehiclePosition_OccupancyStatus
{
    const EMPTY = 0;
    const MANY_SEATS_AVAILABLE = 1;
    const FEW_SEATS_AVAILABLE = 2;
    const STANDING_ROOM_ONLY = 3;
    const CRUSHED_STANDING_ROOM_ONLY = 4;
    const FULL = 5;
    const NOT_ACCEPTING_PASSENGERS = 6;
}

class Alert extends \Google\Protobuf\Internal\Message
{
    private $active_period;
    private $informed_entity;
    private $cause = 0;
    private $effect = 0;
    private $url = null;
    private $header_text = null;
    private $description_text = null;

    public function getActivePeriod()
    {
        return $this->active_period;
    }

    public function setActivePeriod(&$var)
    {
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Transit_realtime\TimeRange::class);
        $this->active_period = $var;
    }

    public function getInformedEntity()
    {
        return $this->informed_entity;
    }

    public function setInformedEntity(&$var)
    {
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Transit_realtime\EntitySelector::class);
        $this->informed_entity = $var;
    }

    public function getCause()
    {
        return $this->cause;
    }

    public function setCause($var)
    {
        GPBUtil::checkEnum($var, \Transit_realtime\Alert_Cause::class);
        $this->cause = $var;
    }

    public function getEffect()
    {
        return $this->effect;
    }

    public function setEffect($var)
    {
        GPBUtil::checkEnum($var, \Transit_realtime\Alert_Effect::class);
        $this->effect = $var;
    }

    public function getUrl()
    {
        return $this->url;
    }

    public function setUrl(&$var)
    {
        GPBUtil::checkMessage($var, \Transit_realtime\TranslatedString::class);
        $this->url = $var;
    }

    public function getHeaderText()
    {
        return $this->header_text;
    }

    public function setHeaderText(&$var)
    {
        GPBUtil::checkMessage($var, \Transit_realtime\TranslatedString::class);
        $this->header_text = $var;
    }

    public function getDescriptionText()
    {
        return $this->description_text;
    }

    public function setDescriptionText(&$var)
    {
        GPBUtil::checkMessage($var, \Transit_realtime\TranslatedString::class);
        $this->description_text = $var;
    }

}

class Alert_Cause
{
    const PROTO3_DEFAULT_CAUSE = 0;
    const UNKNOWN_CAUSE = 1;
    const OTHER_CAUSE = 2;
    const TECHNICAL_PROBLEM = 3;
    const STRIKE = 4;
    const DEMONSTRATION = 5;
    const ACCIDENT = 6;
    const HOLIDAY = 7;
    const WEATHER = 8;
    const MAINTENANCE = 9;
    const CONSTRUCTION = 10;
    const POLICE_ACTIVITY = 11;
    const MEDICAL_EMERGENCY = 12;
}

class Alert_Effect
{
    const PROTO3_DEFAULT_EFFECT = 0;
    const NO_SERVICE = 1;
    const REDUCED_SERVICE = 2;
    const SIGNIFICANT_DELAYS = 3;
    const DETOUR = 4;
    const ADDITIONAL_SERVICE = 5;
    const MODIFIED_SERVICE = 6;
    const OTHER_EFFECT = 7;
    const UNKNOWN_EFFECT = 8;
    const STOP_MOVED = 9;
}

class TimeRange extends \Google\Protobuf\Internal\Message
{
    private $start = 0;
    private $end = 0;

    public function getStart()
    {
        return $this->start;
    }

    public function setStart($var)
    {
        GPBUtil::checkUint64($var);
        $this->start = $var;
    }

    public function getEnd()
    {
        return $this->end;
    }

    public function setEnd($var)
    {
        GPBUtil::checkUint64($var);
        $this->end = $var;
    }

}

class Position extends \Google\Protobuf\Internal\Message
{
    private $latitude = 0.0;
    private $longitude = 0.0;
    private $bearing = 0.0;
    private $odometer = 0.0;
    private $speed = 0.0;

    public function getLatitude()
    {
        return $this->latitude;
    }

    public function setLatitude($var)
    {
        GPBUtil::checkFloat($var);
        $this->latitude = $var;
    }

    public function getLongitude()
    {
        return $this->longitude;
    }

    public function setLongitude($var)
    {
        GPBUtil::checkFloat($var);
        $this->longitude = $var;
    }

    public function getBearing()
    {
        return $this->bearing;
    }

    public function setBearing($var)
    {
        GPBUtil::checkFloat($var);
        $this->bearing = $var;
    }

    public function getOdometer()
    {
        return $this->odometer;
    }

    public function setOdometer($var)
    {
        GPBUtil::checkDouble($var);
        $this->odometer = $var;
    }

    public function getSpeed()
    {
        return $this->speed;
    }

    public function setSpeed($var)
    {
        GPBUtil::checkFloat($var);
        $this->speed = $var;
    }

}

class TripDescriptor extends \Google\Protobuf\Internal\Message
{
    private $trip_id = '';
    private $route_id = '';
    private $direction_id = 0;
    private $start_time = '';
    private $start_date = '';
    private $schedule_relationship = 0;

    public function getTripId()
    {
        return $this->trip_id;
    }

    public function setTripId($var)
    {
        GPBUtil::checkString($var, True);
        $this->trip_id = $var;
    }

    public function getRouteId()
    {
        return $this->route_id;
    }

    public function setRouteId($var)
    {
        GPBUtil::checkString($var, True);
        $this->route_id = $var;
    }

    public function getDirectionId()
    {
        return $this->direction_id;
    }

    public function setDirectionId($var)
    {
        GPBUtil::checkUint32($var);
        $this->direction_id = $var;
    }

    public function getStartTime()
    {
        return $this->start_time;
    }

    public function setStartTime($var)
    {
        GPBUtil::checkString($var, True);
        $this->start_time = $var;
    }

    public function getStartDate()
    {
        return $this->start_date;
    }

    public function setStartDate($var)
    {
        GPBUtil::checkString($var, True);
        $this->start_date = $var;
    }

    public function getScheduleRelationship()
    {
        return $this->schedule_relationship;
    }

    public function setScheduleRelationship($var)
    {
        GPBUtil::checkEnum($var, \Transit_realtime\TripDescriptor_ScheduleRelationship::class);
        $this->schedule_relationship = $var;
    }

}

class TripDescriptor_ScheduleRelationship
{
    const SCHEDULED = 0;
    const ADDED = 1;
    const UNSCHEDULED = 2;
    const CANCELED = 3;
}

class VehicleDescriptor extends \Google\Protobuf\Internal\Message
{
    private $id = '';
    private $label = '';
    private $license_plate = '';

    public function getId()
    {
        return $this->id;
    }

    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;
    }

    public function getLabel()
    {
        return $this->label;
    }

    public function setLabel($var)
    {
        GPBUtil::checkString($var, True);
        $this->label = $var;
    }

    public function getLicensePlate()
    {
        return $this->license_plate;
    }

    public function setLicensePlate($var)
    {
        GPBUtil::checkString($var, True);
        $this->license_plate = $var;
    }

}

class EntitySelector extends \Google\Protobuf\Internal\Message
{
    private $agency_id = '';
    private $route_id = '';
    private $route_type = 0;
    private $trip = null;
    private $stop_id = '';

    public function getAgencyId()
    {
        return $this->agency_id;
    }

    public function setAgencyId($var)
    {
        GPBUtil::checkString($var, True);
        $this->agency_id = $var;
    }

    public function getRouteId()
    {
        return $this->route_id;
    }

    public function setRouteId($var)
    {
        GPBUtil::checkString($var, True);
        $this->route_id = $var;
    }

    public function getRouteType()
    {
        return $this->route_type;
    }

    public function setRouteType($var)
    {
        GPBUtil::checkInt32($var);
        $this->route_type = $var;
    }

    public function getTrip()
    {
        return $this->trip;
    }

    public function setTrip(&$var)
    {
        GPBUtil::checkMessage($var, \Transit_realtime\TripDescriptor::class);
        $this->trip = $var;
    }

    public function getStopId()
    {
        return $this->stop_id;
    }

    public function setStopId($var)
    {
        GPBUtil::checkString($var, True);
        $this->stop_id = $var;
    }

}

class TranslatedString extends \Google\Protobuf\Internal\Message
{
    private $translation;

    public function getTranslation()
    {
        return $this->translation;
    }

    public function setTranslation(&$var)
    {
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \Transit_realtime\TranslatedString_Translation::class);
        $this->translation = $var;
    }

}

class TranslatedString_Translation extends \Google\Protobuf\Internal\Message
{
    private $text = '';
    private $language = '';

    public function getText()
    {
        return $this->text;
    }

    public function setText($var)
    {
        GPBUtil::checkString($var, True);
        $this->text = $var;
    }

    public function getLanguage()
    {
        return $this->language;
    }

    public function setLanguage($var)
    {
        GPBUtil::checkString($var, True);
        $this->language = $var;
    }

}

$pool = DescriptorPool::getGeneratedPool();

$pool->internalAddGeneratedFile(hex2bin(
    "0ac51c0a14677466732d7265616c74696d652e70726f746f331210747261" .
    "6e7369745f7265616c74696d6522690a0b466565644d657373616765122c" .
    "0a0668656164657218012001280b321c2e7472616e7369745f7265616c74" .
    "696d652e46656564486561646572122c0a06656e7469747918022003280b" .
    "321c2e7472616e7369745f7265616c74696d652e46656564456e74697479" .
    "22b9010a0a46656564486561646572121d0a15677466735f7265616c7469" .
    "6d655f76657273696f6e18012001280912430a0e696e6372656d656e7461" .
    "6c69747918022001280e322b2e7472616e7369745f7265616c74696d652e" .
    "466565644865616465722e496e6372656d656e74616c69747912110a0974" .
    "696d657374616d7018032001280422340a0e496e6372656d656e74616c69" .
    "747912100a0c46554c4c5f44415441534554100012100a0c444946464552" .
    "454e5449414c100122bb010a0a46656564456e74697479120a0a02696418" .
    "012001280912120a0a69735f64656c6574656418022001280812310a0b74" .
    "7269705f75706461746518032001280b321c2e7472616e7369745f726561" .
    "6c74696d652e5472697055706461746512320a0776656869636c65180420" .
    "01280b32212e7472616e7369745f7265616c74696d652e56656869636c65" .
    "506f736974696f6e12260a05616c65727418052001280b32172e7472616e" .
    "7369745f7265616c74696d652e416c65727422f7040a0a54726970557064" .
    "617465122e0a047472697018012001280b32202e7472616e7369745f7265" .
    "616c74696d652e5472697044657363726970746f7212340a077665686963" .
    "6c6518032001280b32232e7472616e7369745f7265616c74696d652e5665" .
    "6869636c6544657363726970746f7212450a1073746f705f74696d655f75" .
    "706461746518022003280b322b2e7472616e7369745f7265616c74696d65" .
    "2e547269705570646174652e53746f7054696d6555706461746512110a09" .
    "74696d657374616d70180420012804120d0a0564656c6179180520012805" .
    "1a410a0d53746f7054696d654576656e74120d0a0564656c617918012001" .
    "2805120c0a0474696d6518022001280312130a0b756e6365727461696e74" .
    "791803200128051ad6020a0e53746f7054696d6555706461746512150a0d" .
    "73746f705f73657175656e636518012001280d120f0a0773746f705f6964" .
    "180420012809123b0a076172726976616c18022001280b322a2e7472616e" .
    "7369745f7265616c74696d652e547269705570646174652e53746f705469" .
    "6d654576656e74123d0a0964657061727475726518032001280b322a2e74" .
    "72616e7369745f7265616c74696d652e547269705570646174652e53746f" .
    "7054696d654576656e74125f0a157363686564756c655f72656c6174696f" .
    "6e7368697018052001280e32402e7472616e7369745f7265616c74696d65" .
    "2e547269705570646174652e53746f7054696d655570646174652e536368" .
    "6564756c6552656c6174696f6e73686970223f0a145363686564756c6552" .
    "656c6174696f6e73686970120d0a095343484544554c45441000120b0a07" .
    "534b49505045441001120b0a074e4f5f44415441100222c9060a0f566568" .
    "69636c65506f736974696f6e122e0a047472697018012001280b32202e74" .
    "72616e7369745f7265616c74696d652e5472697044657363726970746f72" .
    "12340a0776656869636c6518082001280b32232e7472616e7369745f7265" .
    "616c74696d652e56656869636c6544657363726970746f72122c0a08706f" .
    "736974696f6e18022001280b321a2e7472616e7369745f7265616c74696d" .
    "652e506f736974696f6e121d0a1563757272656e745f73746f705f736571" .
    "75656e636518032001280d120f0a0773746f705f6964180720012809124b" .
    "0a0e63757272656e745f73746174757318042001280e32332e7472616e73" .
    "69745f7265616c74696d652e56656869636c65506f736974696f6e2e5665" .
    "6869636c6553746f7053746174757312110a0974696d657374616d701805" .
    "20012804124b0a10636f6e67657374696f6e5f6c6576656c18062001280e" .
    "32312e7472616e7369745f7265616c74696d652e56656869636c65506f73" .
    "6974696f6e2e436f6e67657374696f6e4c6576656c124b0a106f63637570" .
    "616e63795f73746174757318092001280e32312e7472616e7369745f7265" .
    "616c74696d652e56656869636c65506f736974696f6e2e4f63637570616e" .
    "637953746174757322470a1156656869636c6553746f7053746174757312" .
    "0f0a0b494e434f4d494e475f41541000120e0a0a53544f505045445f4154" .
    "100112110a0d494e5f5452414e5349545f544f1002227d0a0f436f6e6765" .
    "7374696f6e4c6576656c121c0a18554e4b4e4f574e5f434f4e4745535449" .
    "4f4e5f4c4556454c100012140a1052554e4e494e475f534d4f4f54484c59" .
    "1001120f0a0b53544f505f414e445f474f1002120e0a0a434f4e47455354" .
    "494f4e100312150a115345564552455f434f4e47455354494f4e100422af" .
    "010a0f4f63637570616e637953746174757312090a05454d505459100012" .
    "180a144d414e595f53454154535f415641494c41424c45100112170a1346" .
    "45575f53454154535f415641494c41424c45100212160a125354414e4449" .
    "4e475f524f4f4d5f4f4e4c591003121e0a1a435255534845445f5354414e" .
    "44494e475f524f4f4d5f4f4e4c59100412080a0446554c4c1005121c0a18" .
    "4e4f545f414343455054494e475f50415353454e47455253100622c4060a" .
    "05416c65727412320a0d6163746976655f706572696f6418012003280b32" .
    "1b2e7472616e7369745f7265616c74696d652e54696d6552616e67651239" .
    "0a0f696e666f726d65645f656e7469747918052003280b32202e7472616e" .
    "7369745f7265616c74696d652e456e7469747953656c6563746f72122c0a" .
    "05636175736518062001280e321d2e7472616e7369745f7265616c74696d" .
    "652e416c6572742e4361757365122e0a0665666665637418072001280e32" .
    "1e2e7472616e7369745f7265616c74696d652e416c6572742e4566666563" .
    "74122f0a0375726c18082001280b32222e7472616e7369745f7265616c74" .
    "696d652e5472616e736c61746564537472696e6712370a0b686561646572" .
    "5f74657874180a2001280b32222e7472616e7369745f7265616c74696d65" .
    "2e5472616e736c61746564537472696e67123c0a10646573637269707469" .
    "6f6e5f74657874180b2001280b32222e7472616e7369745f7265616c7469" .
    "6d652e5472616e736c61746564537472696e6722f2010a05436175736512" .
    "180a1450524f544f335f44454641554c545f4341555345100012110a0d55" .
    "4e4b4e4f574e5f43415553451001120f0a0b4f544845525f434155534510" .
    "0212150a11544543484e4943414c5f50524f424c454d1003120a0a065354" .
    "52494b45100412110a0d44454d4f4e5354524154494f4e1005120c0a0841" .
    "43434944454e541006120b0a07484f4c494441591007120b0a0757454154" .
    "4845521008120f0a0b4d41494e54454e414e4345100912100a0c434f4e53" .
    "5452554354494f4e100a12130a0f504f4c4943455f414354495649545910" .
    "0b12150a114d45444943414c5f454d455247454e4359100c22d0010a0645" .
    "666665637412190a1550524f544f335f44454641554c545f454646454354" .
    "1000120e0a0a4e4f5f53455256494345100112130a0f524544554345445f" .
    "53455256494345100212160a125349474e49464943414e545f44454c4159" .
    "531003120a0a064445544f5552100412160a124144444954494f4e414c5f" .
    "53455256494345100512140a104d4f4449464945445f5345525649434510" .
    "0612100a0c4f544845525f454646454354100712120a0e554e4b4e4f574e" .
    "5f4546464543541008120e0a0a53544f505f4d4f564544100922270a0954" .
    "696d6552616e6765120d0a057374617274180120012804120b0a03656e64" .
    "18022001280422610a08506f736974696f6e12100a086c61746974756465" .
    "18012001280212110a096c6f6e676974756465180220012802120f0a0762" .
    "656172696e6718032001280212100a086f646f6d65746572180420012801" .
    "120d0a0573706565641805200128022298020a0e54726970446573637269" .
    "70746f72120f0a07747269705f696418012001280912100a08726f757465" .
    "5f696418052001280912140a0c646972656374696f6e5f69641806200128" .
    "0d12120a0a73746172745f74696d6518022001280912120a0a7374617274" .
    "5f6461746518032001280912540a157363686564756c655f72656c617469" .
    "6f6e7368697018042001280e32352e7472616e7369745f7265616c74696d" .
    "652e5472697044657363726970746f722e5363686564756c6552656c6174" .
    "696f6e73686970224f0a145363686564756c6552656c6174696f6e736869" .
    "70120d0a095343484544554c4544100012090a0541444445441001120f0a" .
    "0b554e5343484544554c45441002120c0a0843414e43454c454410032245" .
    "0a1156656869636c6544657363726970746f72120a0a0269641801200128" .
    "09120d0a056c6162656c18022001280912150a0d6c6963656e73655f706c" .
    "617465180320012809228a010a0e456e7469747953656c6563746f721211" .
    "0a096167656e63795f696418012001280912100a08726f7574655f696418" .
    "022001280912120a0a726f7574655f74797065180320012805122e0a0474" .
    "72697018042001280b32202e7472616e7369745f7265616c74696d652e54" .
    "72697044657363726970746f72120f0a0773746f705f6964180520012809" .
    "2286010a105472616e736c61746564537472696e6712430a0b7472616e73" .
    "6c6174696f6e18012003280b322e2e7472616e7369745f7265616c74696d" .
    "652e5472616e736c61746564537472696e672e5472616e736c6174696f6e" .
    "1a2d0a0b5472616e736c6174696f6e120c0a047465787418012001280912" .
    "100a086c616e6775616765180220012809421d0a1b636f6d2e676f6f676c" .
    "652e7472616e7369742e7265616c74696d65620670726f746f33"
));

