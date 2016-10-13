# gtfs-realtime-proto3
This is a conversion of Google's [GTFS-realtime protobuff file](https://developers.google.com/transit/gtfs-realtime/gtfs-realtime-proto) from proto2 to proto3 so it can be used to generate classes for a variety of languages. With the proto3 format, [classes can be automatically generated](https://developers.google.com/protocol-buffers/docs/proto3#generating) using the latest version of the protoc compiler. To use it, [download the protoc binary](https://github.com/google/protobuf/releases) for your platform and run it with the correct output flag for your language of choice. The protoc binary included in this repository is the [64-bit Linux 3.1.0 version](https://github.com/google/protobuf/releases/download/v3.1.0/protoc-3.1.0-linux-x86_64.zip).

For example, this command will generate a file in the current directory that contains the PHP classes:
```
./protoc --php_out=./ gtfs-realtime.proto3
```

You can add filename.zip and protoc will automatically zip the class files for you:
```
./protoc --php_out=./gtfs-realtime-php.zip gtfs-realtime.proto3
```

I uploaded all the zip files for easy download, if you don't feel like generating your own. Here is the command I used:
```
./protoc \
  --cpp_out=./gtfs-realtime-cpp.zip \
  --java_out=./gtfs-realtime-java.zip \
  --python_out=./gtfs-realtime-python.zip \
  --go_out=./gtfs-realtime-go.zip \
  --ruby_out=./gtfs-realtime-ruby.zip \
  --javanano_out=./gtfs-realtime-javanano.zip \
  --objc_out=./gtfs-realtime-objc.zip \
  --csharp_out=./gtfs-realtime-csharp.zip \
  --php_out=./gtfs-realtime-php.zip \
gtfs-realtime.proto3
```

Note: I haven't field tested all these classes, so I would appreciate any feedback on how well they work.

These classes are intended to be used in conjunction with the (google/protobuf package)[https://packagist.org/packages/google/protobuf] for parsing of gtfs-realtime feeds.
