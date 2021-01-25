var assert = require('assert')
var isShallowEqual = require('./')

// pass
assert(
  isShallowEqual({ a: 1, b: 2, c: undefined }, { a: 1, b: 2, c: undefined })
)

assert(isShallowEqual({ a: 1, b: 2, c: 3 }, { a: 1, b: 2, c: 3 }))

var o = {}
assert(isShallowEqual({ a: 1, b: 2, c: o }, { a: 1, b: 2, c: o }))

var d = function() {
  return 1
}
assert(isShallowEqual({ a: 1, b: 2, c: o, d }, { a: 1, b: 2, c: o, d }))

// fail
assert(
  !isShallowEqual(
    {
      a: 1,
      b: 2,
      d: function() {
        return 1
      }
    },
    {
      a: 1,
      b: 2,
      d: function() {
        return 1
      }
    }
  )
)

assert(!isShallowEqual({ a: 1, b: 2, c: 3 }, { a: 1, b: 2 }))

assert(!isShallowEqual({ a: 1, b: 2 }, { a: 1, b: 2, c: 3 }))

assert(!isShallowEqual({ a: 1, bb: 2, c: 3 }, { a: 1, b: 2, c: 3 }))
