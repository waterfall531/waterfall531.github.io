---
title: "Mtmr"
date: 2021-07-23T00:29:01+08:00
draft: true
tags: [""]
series: [""]
categories: [""]
---

# setting

>cpu mem 亮度 spotify 音量
```json
[
   {
      "type":"brightnessDown",
      "width":44,
      "align":"left"
   },
   {
      "type":"brightnessUp",
      "width":44,
      "align":"left"
   },
   {
      "type":"appleScriptTitledButton",
      "source":{
         "inline":"set cpu to do shell script \"ps axo %cpu | awk '{s+=$1}END{print s}'\"\rreturn cpu & \"%\""
      },
      "action":"appleScript",
      "actionAppleScript":{
         "inline":"activate application \"Activity Monitor\"\rtell application \"System Events\"\r\ttell process \"Activity Monitor\"\r\t\ttell radio button \"CPU\" of radio group 1 of group 2 of toolbar 1 of window 1 to perform action \"AXPress\"\r\tend tell\rend tell"
      },
      "refreshInterval":5,
      "align":"left",
      "image":{
         "base64":"iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAMAAACdt4HsAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAA/1BMVEUAAADaACbYACfYACfjABzXACjYACfXACjYACfYACfYACfYACfdACLYACfXACjYACfVACv/AADXACjYACfYACfXACjYACfXACjaACXYACfYACfVACvYACfYACfZACbZACbYACfYACfZACb/AADYACfYACfVACrXACjVACu/AEDYACfYACfYACfXACjXACjYACfXACjYACfYACfYACfXACjYACfXACjYACfYACfZACbYACfYACfMADPYACfYACfYACfYACfYACfZACbXACjYACfYACfRAC7XACjYACfZACbWACnXACjXACjYACfTACzZACb/AADYACfYACfYACcAAAA+zneGAAAAU3RSTlMAItK+CVPjh3xUxPwPiGDQGAMtSKmN3Vk+wPQG/e26oIJBnwJCdiuAHgTmw+6BX+IgfaqLUvKOW8VKnagK+vBwYrhlc/urCznvhSyUbOEXPAFjGh/ektAAAAABYktHRACIBR1IAAAACXBIWXMAAA3XAAAN1wFCKJt4AAAAB3RJTUUH4ggWETQWgEDcSgAAAqVJREFUWMPtl4ly2jAQhsUNNlcw5r4SICEHLSQhCQRyX73T/u//LpUlLIyxbMAznWmn/0ywo5U+27tr7ZoQuwLBUJidRKIxPhKLRtgxHAoGiLfiQIKdKFCTxjGpQmEDCSC+BiAFpNlJBsgaxyyQYQNpIPUf8AcAOzktD+iaoQJQNI5FoMAGdCCv5XZclpfKFXiqUi5Jllf1mvdyQzW96gigd4h6o+mhRp1O0x3vvwa1VSWeqrZU1Jyeogy01ggSVQsoO/i/gjq9/u6u+2LDXq2jshqLHNCgdsCVwO0NILdi0oDmuoAmoImhQDzFRPNnb36L7U43NVfc2EH2D9h5t9OePyIF5IU9uIhvkyN7iiXmQUIOj8x/lB6f0bTaQ3ZA+9iaNCH2Lpg6btsBIRJOpJl0E9ABTvof5kqEGeCjMaN/AnRMgM5XJcI2J1J1gf6S48Tb2Ae6JkAjdgmAeJ1XAOJ1Xg8wGJ6elXwAzkeGjy62BgxG3MuXnoCIkmEq8EQyAUPgajyhPxJAga9SIiRqzwMOuAbGZDrDjQRgKkpiqiPgFphM74B7d4BKy2cyy1RcBvSodUb/HiSAIl+VlEfh8cm4wvPL9nnw+gbc+kkkUVioO95etwe8PBuP8vQoBzg7UQAe5t7syZwoCaMA3AN30wlzh3MYJYkkADeYTckYuJYlkiSVBeCKZtSY/gxlqezlxEt+pdFg6zBesPXn1ih8Aj5vkAels9PhYCkPsl++kg0AQu4dyuqmugIQm+qS5Nv6N+D7wm7d1skPc4xu666Fhd6BxU6r+jub8tNaWNxK29EhsdpR/sVn7FlLm0txPdgni+JrFNd3p+K67MQtyrsp3w2G7xbHd5Plv83z3Wj6b3V9N9ssFv7afaa//ZPn3wD4/vje8PP/N7TebS0hgZhEAAAAJXRFWHRkYXRlOmNyZWF0ZQAyMDE4LTA4LTIyVDE3OjUyOjIyKzAyOjAwc2qUYAAAACV0RVh0ZGF0ZTptb2RpZnkAMjAxOC0wOC0yMlQxNzo1MjoyMiswMjowMAI3LNwAAAAZdEVYdFNvZnR3YXJlAHd3dy5pbmtzY2FwZS5vcmeb7jwaAAAAAElFTkSuQmCC"
      }
   },
   {
      "type":"appleScriptTitledButton",
      "source":{
         "inline":"set mem to do shell script \"ps -A -o %mem | awk '{s+=$1}END{print s}'\"\rreturn mem & \"%\""
      },
      "action":"appleScript",
      "actionAppleScript":{
         "inline":"activate application \"Activity Monitor\"\rtell application \"System Events\"\r\ttell process \"Activity Monitor\"\r\t\ttell radio button \"CPU\" of radio group 1 of group 2 of toolbar 1 of window 1 to perform action \"AXPress\"\r\tend tell\rend tell"
      },
      "refreshInterval":5,
      "align":"left",
      "image":{
         "base64":"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"
      }
   },
   {
      "type":"appleScriptTitledButton",
      "source":{
         "inline":"if application \"Spotify\" is running then\rtell application \"Spotify\"\rif player state is playing then\rreturn (get artist of current track) & \" – \" & (get name of current track)\relse\rreturn \"\"\rend if\rend tell\rend if\rreturn \"\"\r"
      },
      "action":"appleScript",
      "actionAppleScript":{
         "inline":"if application \"Spotify\" is running then\rtell application \"Spotify\"\rif player state is playing then\rnext track\rend if\rend tell\rend if\r"
      },
      "refreshInterval":1,
      "image":{
         "base64":"iVBORw0KGgoAAAANSUhEUgAAAEAAAABABAMAAABYR2ztAAAABGdBTUEAALGPC/xhBQAAAAFzUkdCAK7OHOkAAAAYUExURUdwTB3WXx3UXh3VXx7XYBkXFRpVLRyURmIaeAQAAAAEdFJOUwDDO3fSqUUkAAABbklEQVRIx61VbW6DMAztoAeYNA7ApB6gkzhAWS24wIAL0HABaK6/pHFNEhy8TXu/kPzkPD/8cTj8K7KPAqB+K5NhQPCUrABCXe7HOUYYZxgVRLiG8RfY4DUgFFtC7cffAfZTFBwBdhWEKfgEq4ocEjgj4ZQifO6/QG9kkETp1dDeVWfRKx3XYSW0LoqY5kCElXDrQkyeCCuh6WL0M4nIWQIyzqixdfKU1koFDKvyCA8NJMzU4xiD+b4kfHRpsIyKc6hBwjVptFHVY51EMAINNDFGJITKDNQcdpX74Hz0CQ3rY5qwMp4EIxrlafzrsYZ2Veb0DkRgfNCUok4Y1fqEijfyi2b8RE9beWqa48Y/uvCNMcH9btfUi+/CGLR1vhL6Zz9N/vBlaCU+7lwY/cmJ67Ryen/2tj23PLqJBodZH8vgj544vOL4pxfI5acrSFxi8hrkU9TSKr78ZpnL50A8KPJJEo+afBblwyqf5j/iGys5j6ScrST2AAAAAElFTkSuQmCC"
      }
   },
   {
      "type":"previous",
      "width":44,
      "align":"right"
   },
   {
      "type":"play",
      "width":44,
      "align":"right"
   },
   {
      "type":"next",
      "width":44,
      "align":"right"
   },
   {
      "type":"mute",
      "width":40,
      "align":"right"
   },
   { "type": "volumeDown", "width": 40, "align": "right" },
	{ "type": "volumeUp", "width": 40, "align": "right" }
]
```