// One line calculator
calc = () => { return eval(prompt().replace(/[^\ \+\-\*\/0-9]/g, '')); }

// even better...
calc = (str) => { return eval( (str ? str : prompt()).replace(/[^\ \+\-\*\/0-9]/g, '')) || false; }
