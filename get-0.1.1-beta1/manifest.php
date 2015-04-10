<?php return array (
  'manifest-version' => '1.1',
  'manifest-attributes' => 
  array (
    'readme' => 'Title: get
Version: 0.1.1
By: Martin Sanders.

Get from URL string, example:

Return True if "extra_ids" contain\'s "56". 
[[!get? &if=`extra_ids` &is=`56` &return=`selected`]]

Return True if "extra_ids" does not contain "56". 
[[!get? &if=`extra_ids` &isnot=`56` &return=`selected`]]

Return value of string
[[!get? &if=`extra_ids` &prefix=`?startdate=` &suffix=`` &returnValue=`1`]]
',
  ),
  'manifest-vehicles' => 
  array (
    0 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modNamespace',
      'guid' => 'b159e1f125081ce666608b8815cf0964',
      'native_key' => 'get',
      'filename' => 'modNamespace/58dd5eefe27f4a11b37035da4322c951.vehicle',
      'namespace' => 'get',
    ),
    1 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modCategory',
      'guid' => 'd64cdafcf24c2640fa9a10ec5195e575',
      'native_key' => 1,
      'filename' => 'modCategory/58a1490229ea411187d84f4013c51db0.vehicle',
      'namespace' => 'get',
    ),
  ),
);