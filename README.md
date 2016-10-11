# gtfs-realtime-proto3
A conversion of Google's [GTFS-realtime protobuff file](https://developers.google.com/transit/gtfs-realtime/gtfs-realtime-proto) from proto2 to proto3 so it can be used to generate classes for a variety of languages. With the proto3 format, [classes can be automatically generated](https://developers.google.com/protocol-buffers/docs/proto3#generating) against any protobuff feed using the latest version of the protoc compiler. To use it, [download the protoc binary](https://github.com/google/protobuf/releases) for your platform and run it with the correct output flag for your language of choice.

Example for PHP:
```
./protoc --php_out=./ gtfs-realtime.proto3
```
