# nginx Mirror Benchmarking
Benchmarking the mirror proposal, based on https://alex.dzyoba.com/blog/nginx-mirror/

## Testing parameters
All testing was done using the `hey` tool (https://github.com/rakyll/hey), e.g.:
```
    hey -z 25s -q 1000 -n 100000 -c 1 -t 1 http://localhost:8080
```

## Initial Test
This was using the default site setup (sites-enabled/default - port 8080)
```
Summary:
  Total:        25.1444 secs
  Slowest:      0.2209 secs
  Fastest:      0.2045 secs
  Average:      0.2078 secs
  Requests/sec: 4.8122


Response time histogram:
  0.205 [1]     |■
  0.206 [55]    |■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
  0.208 [25]    |■■■■■■■■■■■■■■■■■■
  0.209 [12]    |■■■■■■■■■
  0.211 [9]     |■■■■■■■
  0.213 [7]     |■■■■■
  0.214 [7]     |■■■■■
  0.216 [0]     |
  0.218 [3]     |■■
  0.219 [1]     |■
  0.221 [1]     |■


Latency distribution:
  10% in 0.2051 secs
  25% in 0.2056 secs
  50% in 0.2065 secs
  75% in 0.2093 secs
  90% in 0.2127 secs
  95% in 0.2143 secs
  99% in 0.2209 secs

Details (average, fastest, slowest):
  DNS+dialup:   0.0001 secs, 0.2045 secs, 0.2209 secs
  DNS-lookup:   0.0001 secs, 0.0000 secs, 0.0075 secs
  req write:    0.0000 secs, 0.0000 secs, 0.0001 secs
  resp wait:    0.2075 secs, 0.2044 secs, 0.2207 secs
  resp read:    0.0001 secs, 0.0001 secs, 0.0003 secs

Status code distribution:
  [200] 121 responses
```

## 