use std::io::{self, Read};

pub fn solve(input: &str) -> String {
    let mut sc = Scanner::new(input);

    // Write your solution here
    // Example:
    // let n: usize = sc.next();
    // let a: i64 = sc.next();
    // let s: String = sc.next();

    let mut out = String::new();
    // out.push_str(&format!("{}\n", n));
    out
}

fn main() {
    let mut input = String::new();
    io::stdin().read_to_string(&mut input).unwrap();
    let output = solve(&input);
    print!("{}", output);
}

struct Scanner<'a> {
    iter: std::str::SplitWhitespace<'a>,
}

impl<'a> Scanner<'a> {
    fn new(input: &'a str) -> Self {
        Self {
            iter: input.split_whitespace(),
        }
    }

    fn next<T: std::str::FromStr>(&mut self) -> T {
        self.iter.next().unwrap().parse().ok().unwrap()
    }

    fn next_str(&mut self) -> String {
        self.next::<String>()
    }
}
