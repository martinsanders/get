# get
Modx get from url string

##Get from URL string, example:

Return True if "extra_ids" contain's "56". 
```
[[!get? &if=`extra_ids` &is=`56` &return=`selected`]]
```

Return True if "extra_ids" does not contain "56". 
```
[[!get? &if=`extra_ids` &isnot=`56` &return=`selected`]]
```

Return value of string
```
[[!get? &if=`extra_ids` &prefix=`?startdate=` &suffix=`` &returnValue=`1`]]
```
