#!/usr/bin/env python
# labyrinth.js translated to python

import math, random

for line in range(1, 60):
  for i in range(1, 29):
    s = "╱" if (math.floor((
      random.random() * 2) % 2)) else "╲"
    print(s, end="")
