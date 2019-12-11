# nginx Mirror Benchmarking
Benchmarking the mirror proposal, based on https://alex.dzyoba.com/blog/nginx-mirror/

## Testing parameters
All testing was done using the `hey` tool (https://github.com/rakyll/hey), e.g.:
```
    .\dev.ps1 hey -z 25s -q 1000 -n 100000 -c 1 -t 1 http://app:80
```

## Initial Test
This was using the default site setup (sites-enabled/default - port 80)
```
Summary:
  Total:        25.0900 secs
  Slowest:      0.2302 secs
  Fastest:      0.2035 secs
  Average:      0.2090 secs
  Requests/sec: 4.7828


Response time histogram:
  0.203 [1]     |■
  0.206 [25]    |■■■■■■■■■■■■■■■■■■■■■■■■■■
  0.209 [39]    |■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
  0.211 [33]    |■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
  0.214 [6]     |■■■■■■
  0.217 [10]    |■■■■■■■■■■
  0.220 [5]     |■■■■■
  0.222 [0]     |
  0.225 [0]     |
  0.228 [0]     |
  0.230 [1]     |■


Latency distribution:
  10% in 0.2044 secs
  25% in 0.2070 secs
  50% in 0.2084 secs
  75% in 0.2100 secs
  90% in 0.2150 secs
  95% in 0.2172 secs
  99% in 0.2302 secs

Details (average, fastest, slowest):
  DNS+dialup:   0.0000 secs, 0.2035 secs, 0.2302 secs
  DNS-lookup:   0.0000 secs, 0.0000 secs, 0.0013 secs
  req write:    0.0001 secs, 0.0000 secs, 0.0010 secs
  resp wait:    0.2086 secs, 0.2031 secs, 0.2292 secs
  resp read:    0.0003 secs, 0.0001 secs, 0.0015 secs

Status code distribution:
  [200] 120 responses
```

## Mirrored to Local Copy
This was using a site that mirrored to local (sites-enabled/mirror-self - port 81)
```
Summary:
  Total:        25.0114 secs
  Slowest:      0.2265 secs
  Fastest:      0.2038 secs
  Average:      0.2101 secs
  Requests/sec: 4.7578


Response time histogram:
  0.204 [1]     |■■
  0.206 [26]    |■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
  0.208 [18]    |■■■■■■■■■■■■■■■■■■■■■■■■■■■■
  0.211 [24]    |■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
  0.213 [15]    |■■■■■■■■■■■■■■■■■■■■■■■
  0.215 [20]    |■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
  0.217 [6]     |■■■■■■■■■
  0.220 [7]     |■■■■■■■■■■■
  0.222 [1]     |■■
  0.224 [0]     |
  0.226 [1]     |■■


Latency distribution:
  10% in 0.2049 secs
  25% in 0.2065 secs
  50% in 0.2094 secs
  75% in 0.2135 secs
  90% in 0.2168 secs
  95% in 0.2183 secs
  99% in 0.2265 secs

Details (average, fastest, slowest):
  DNS+dialup:   0.0000 secs, 0.2038 secs, 0.2265 secs
  DNS-lookup:   0.0000 secs, 0.0000 secs, 0.0019 secs
  req write:    0.0001 secs, 0.0000 secs, 0.0006 secs
  resp wait:    0.2096 secs, 0.2035 secs, 0.2255 secs
  resp read:    0.0003 secs, 0.0001 secs, 0.0015 secs

Status code distribution:
  [200] 119 responses
```

## Mirrored to Remote Site
This was using a site that mirrored to example.com (sites-enabled/mirror-remote - port 82)
```
Summary:
  Total:        25.1572 secs
  Slowest:      0.4452 secs
  Fastest:      0.2035 secs
  Average:      0.2132 secs
  Requests/sec: 4.6905


Response time histogram:
  0.204 [1]     |
  0.228 [115]   |■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
  0.252 [0]     |
  0.276 [0]     |
  0.300 [0]     |
  0.324 [0]     |
  0.349 [0]     |
  0.373 [0]     |
  0.397 [0]     |
  0.421 [1]     |
  0.445 [1]     |


Latency distribution:
  10% in 0.2057 secs
  25% in 0.2071 secs
  50% in 0.2088 secs
  75% in 0.2104 secs
  90% in 0.2162 secs
  95% in 0.2174 secs
  99% in 0.4452 secs

Details (average, fastest, slowest):
  DNS+dialup:   0.0000 secs, 0.2035 secs, 0.4452 secs
  DNS-lookup:   0.0000 secs, 0.0000 secs, 0.0006 secs
  req write:    0.0001 secs, 0.0000 secs, 0.0004 secs
  resp wait:    0.2126 secs, 0.2029 secs, 0.4448 secs
  resp read:    0.0004 secs, 0.0001 secs, 0.0015 secs

Status code distribution:
  [200] 118 responses
```
