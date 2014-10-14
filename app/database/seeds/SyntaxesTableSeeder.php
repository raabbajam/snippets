<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class SyntaxesTableSeeder extends Seeder {

	public function run()
	{
		Syntax::insert([
			[
				'name' => 'apl',
				'alias' => 'APL'
			],
			[
				'name' => 'asterisk',
				'alias' => 'Asterisk dialplan'
			],
			[
				'name' => 'clike',
				'alias' => 'C, C++, C#'
			],
			[
				'name' => 'clojure',
				'alias' => 'Clojure'
			],
			[
				'name' => 'cobol',
				'alias' => 'COBOL'
			],
			[
				'name' => 'coffeescript',
				'alias' => 'CoffeeScript'
			],
			[
				'name' => 'commonlisp',
				'alias' => 'Common Lisp'
			],
			[
				'name' => 'css',
				'alias' => 'CSS'
			],
			[
				'name' => 'cypher',
				'alias' => 'Cypher'
			],
			[
				'name' => 'cython',
				'alias' => 'Cython'
			],
			[
				'name' => 'd',
				'alias' => 'D'
			],
			[
				'name' => 'django',
				'alias' => 'Django (templating language)'
			],
			[
				'name' => 'diff',
				'alias' => 'diff'
			],
			[
				'name' => 'dtd',
				'alias' => 'DTD'
			],
			[
				'name' => 'dylan',
				'alias' => 'Dylan'
			],
			[
				'name' => 'ecl',
				'alias' => 'ECL'
			],
			[
				'name' => 'eiffel',
				'alias' => 'Eiffel'
			],
			[
				'name' => 'erlang',
				'alias' => 'Erlang'
			],
			[
				'name' => 'fortran',
				'alias' => 'Fortran'
			],
			[
				'name' => 'f#',
				'alias' => 'F#'
			],
			[
				'name' => 'gas',
				'alias' => 'Gas (AT&T-style assembly)'
			],
			[
				'name' => 'gherkin',
				'alias' => 'Gherkin'
			],
			[
				'name' => 'go',
				'alias' => 'Go'
			],
			[
				'name' => 'groovy',
				'alias' => 'Groovy'
			],
			[
				'name' => 'haml',
				'alias' => 'HAML'
			],
			[
				'name' => 'haskell',
				'alias' => 'Haskell'
			],
			[
				'name' => 'haxe',
				'alias' => 'Haxe'
			],
			[
				'name' => 'htmlembedded',
				'alias' => 'HTML embedded scripts'
			],
			[
				'name' => 'htmlmixed',
				'alias' => 'HTML mixed-mode'
			],
			[
				'name' => 'http',
				'alias' => 'HTTP'
			],
			[
				'name' => 'java',
				'alias' => 'Java'
			],
			[
				'name' => 'jade',
				'alias' => 'Jade'
			],
			[
				'name' => 'javascript',
				'alias' => 'JavaScript'
			],
			[
				'name' => 'jinja2',
				'alias' => 'Jinja2'
			],
			[
				'name' => 'julia',
				'alias' => 'Julia'
			],
			[
				'name' => 'kotlin',
				'alias' => 'Kotlin'
			],
			[
				'name' => 'less',
				'alias' => 'LESS'
			],
			[
				'name' => 'livescript',
				'alias' => 'LiveScript'
			],
			[
				'name' => 'lua',
				'alias' => 'Lua'
			],
			[
				'name' => 'markdown',
				'alias' => 'Markdown (GitHub-flavour)'
			],
			[
				'name' => 'mirc',
				'alias' => 'mIRC'
			],
			[
				'name' => 'mllike',
				'alias' => 'Modelica'
			],
			[
				'name' => 'nginx',
				'alias' => 'Nginx'
			],
			[
				'name' => 'ntriples',
				'alias' => 'NTriples'
			],
			[
				'name' => 'ocaml',
				'alias' => 'OCaml'
			],
			[
				'name' => 'octave',
				'alias' => 'Octave (MATLAB)'
			],
			[
				'name' => 'pascal',
				'alias' => 'Pascal'
			],
			[
				'name' => 'pegjs',
				'alias' => 'PEG.js'
			],
			[
				'name' => 'perl',
				'alias' => 'Perl'
			],
			[
				'name' => 'php',
				'alias' => 'PHP'
			],
			[
				'name' => 'piq',
				'alias' => 'Pig Latin'
			],
			[
				'name' => 'properties',
				'alias' => 'Properties files'
			],
			[
				'name' => 'puppet',
				'alias' => 'Puppet'
			],
			[
				'name' => 'python',
				'alias' => 'Python'
			],
			[
				'name' => 'q',
				'alias' => 'Q'
			],
			[
				'name' => 'r',
				'alias' => 'R'
			],
			[
				'name' => 'rpm-changes',
				'alias' => 'RPM'
			],
			[
				'name' => 'rst',
				'alias' => 'reStructuredText'
			],
			[
				'name' => 'ruby',
				'alias' => 'Ruby'
			],
			[
				'name' => 'rust',
				'alias' => 'Rust'
			],
			[
				'name' => 'sass',
				'alias' => 'Sass'
			],
			[
				'name' => 'scala',
				'alias' => 'Scala'
			],
			[
				'name' => 'scheme',
				'alias' => 'Scheme'
			],
			[
				'name' => 'scss',
				'alias' => 'SCSS'
			],
			[
				'name' => 'shell',
				'alias' => 'Shell'
			],
			[
				'name' => 'sieve',
				'alias' => 'Sieve'
			],
			[
				'name' => 'slim',
				'alias' => 'Slim'
			],
			[
				'name' => 'smalltalk',
				'alias' => 'Smalltalk'
			],
			[
				'name' => 'smarty',
				'alias' => 'Smarty'
			],
			[
				'name' => 'smartymixed',
				'alias' => 'Smarty/HTML mixed'
			],
			[
				'name' => 'solr',
				'alias' => 'Solr'
			],
			[
				'name' => 'sql',
				'alias' => 'SQL (several dialects)'
			],
			[
				'name' => 'sparql',
				'alias' => 'SPARQL'
			],
			[
				'name' => 'stex',
				'alias' => 'sTeX, LaTeX'
			],
			[
				'name' => 'tcl',
				'alias' => 'Tcl'
			],
			[
				'name' => 'tiddlywiki',
				'alias' => 'Tiddlywiki'
			],
			[
				'name' => 'tiki',
				'alias' => 'Tiki wiki'
			],
			[
				'name' => 'toml',
				'alias' => 'TOML'
			],
			[
				'name' => 'turtle',
				'alias' => 'Turtle'
			],
			[
				'name' => 'vb',
				'alias' => 'VB.NET'
			],
			[
				'name' => 'vbscript',
				'alias' => 'VBScript'
			],
			[
				'name' => 'velocity',
				'alias' => 'Velocity'
			],
			[
				'name' => 'verilog',
				'alias' => 'Verilog/SystemVerilog'
			],
			[
				'name' => 'xml',
				'alias' => 'XML/HTML'
			],
			[
				'name' => 'xquery',
				'alias' => 'XQuery'
			],
			[
				'name' => 'yaml',
				'alias' => 'YAML'
			],
			[
				'name' => 'z80',
				'alias' => 'Z80
			']
		]);
	}

}