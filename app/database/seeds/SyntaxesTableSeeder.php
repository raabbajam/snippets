<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class SyntaxesTableSeeder extends Seeder {
	public function run()
	{
		Syntax::insert([
			[			
				'created_at' => time(),
				'updated_at' => time(),
				'name' => 'apl',
				'alias' => 'APL'
			],
			[			
				'created_at' => time(),
				'updated_at' => time(),
				'name' => 'asterisk',
				'alias' => 'Asterisk dialplan'
			],
			[			
				'created_at' => time(),
				'updated_at' => time(),
				'name' => 'clike',
				'alias' => 'C, C++, C#'
			],
			[			
				'created_at' => time(),
				'updated_at' => time(),
				'name' => 'clojure',
				'alias' => 'Clojure'
			],
			[			
				'created_at' => time(),
				'updated_at' => time(),
				'name' => 'cobol',
				'alias' => 'COBOL'
			],
			[			
				'created_at' => time(),
				'updated_at' => time(),
				'name' => 'coffeescript',
				'alias' => 'CoffeeScript'
			],
			[			
				'created_at' => time(),
				'updated_at' => time(),
				'name' => 'commonlisp',
				'alias' => 'Common Lisp'
			],
			[			
				'created_at' => time(),
				'updated_at' => time(),
				'name' => 'css',
				'alias' => 'CSS'
			],
			[			
				'created_at' => time(),
				'updated_at' => time(),
				'name' => 'cypher',
				'alias' => 'Cypher'
			],
			[			
				'created_at' => time(),
				'updated_at' => time(),
				'name' => 'cython',
				'alias' => 'Cython'
			],
			[			
				'created_at' => time(),
				'updated_at' => time(),
				'name' => 'd',
				'alias' => 'D'
			],
			[			
				'created_at' => time(),
				'updated_at' => time(),
				'name' => 'django',
				'alias' => 'Django (templating language)'
			],
			[			
				'created_at' => time(),
				'updated_at' => time(),
				'name' => 'diff',
				'alias' => 'diff'
			],
			[			
				'created_at' => time(),
				'updated_at' => time(),
				'name' => 'dtd',
				'alias' => 'DTD'
			],
			[			
				'created_at' => time(),
				'updated_at' => time(),
				'name' => 'dylan',
				'alias' => 'Dylan'
			],
			[			
				'created_at' => time(),
				'updated_at' => time(),
				'name' => 'ecl',
				'alias' => 'ECL'
			],
			[			
				'created_at' => time(),
				'updated_at' => time(),
				'name' => 'eiffel',
				'alias' => 'Eiffel'
			],
			[			
				'created_at' => time(),
				'updated_at' => time(),
				'name' => 'erlang',
				'alias' => 'Erlang'
			],
			[			
				'created_at' => time(),
				'updated_at' => time(),
				'name' => 'fortran',
				'alias' => 'Fortran'
			],
			[			
				'created_at' => time(),
				'updated_at' => time(),
				'name' => 'f#',
				'alias' => 'F#'
			],
			[			
				'created_at' => time(),
				'updated_at' => time(),
				'name' => 'gas',
				'alias' => 'Gas (AT&T-style assembly)'
			],
			[			
				'created_at' => time(),
				'updated_at' => time(),
				'name' => 'gherkin',
				'alias' => 'Gherkin'
			],
			[			
				'created_at' => time(),
				'updated_at' => time(),
				'name' => 'go',
				'alias' => 'Go'
			],
			[			
				'created_at' => time(),
				'updated_at' => time(),
				'name' => 'groovy',
				'alias' => 'Groovy'
			],
			[			
				'created_at' => time(),
				'updated_at' => time(),
				'name' => 'haml',
				'alias' => 'HAML'
			],
			[			
				'created_at' => time(),
				'updated_at' => time(),
				'name' => 'haskell',
				'alias' => 'Haskell'
			],
			[			
				'created_at' => time(),
				'updated_at' => time(),
				'name' => 'haxe',
				'alias' => 'Haxe'
			],
			[			
				'created_at' => time(),
				'updated_at' => time(),
				'name' => 'htmlembedded',
				'alias' => 'HTML embedded scripts'
			],
			[			
				'created_at' => time(),
				'updated_at' => time(),
				'name' => 'htmlmixed',
				'alias' => 'HTML mixed-mode'
			],
			[			
				'created_at' => time(),
				'updated_at' => time(),
				'name' => 'http',
				'alias' => 'HTTP'
			],
			[			
				'created_at' => time(),
				'updated_at' => time(),
				'name' => 'java',
				'alias' => 'Java'
			],
			[			
				'created_at' => time(),
				'updated_at' => time(),
				'name' => 'jade',
				'alias' => 'Jade'
			],
			[			
				'created_at' => time(),
				'updated_at' => time(),
				'name' => 'javascript',
				'alias' => 'JavaScript'
			],
			[			
				'created_at' => time(),
				'updated_at' => time(),
				'name' => 'jinja2',
				'alias' => 'Jinja2'
			],
			[			
				'created_at' => time(),
				'updated_at' => time(),
				'name' => 'julia',
				'alias' => 'Julia'
			],
			[			
				'created_at' => time(),
				'updated_at' => time(),
				'name' => 'kotlin',
				'alias' => 'Kotlin'
			],
			[			
				'created_at' => time(),
				'updated_at' => time(),
				'name' => 'less',
				'alias' => 'LESS'
			],
			[			
				'created_at' => time(),
				'updated_at' => time(),
				'name' => 'livescript',
				'alias' => 'LiveScript'
			],
			[			
				'created_at' => time(),
				'updated_at' => time(),
				'name' => 'lua',
				'alias' => 'Lua'
			],
			[			
				'created_at' => time(),
				'updated_at' => time(),
				'name' => 'markdown',
				'alias' => 'Markdown (GitHub-flavour)'
			],
			[			
				'created_at' => time(),
				'updated_at' => time(),
				'name' => 'mirc',
				'alias' => 'mIRC'
			],
			[			
				'created_at' => time(),
				'updated_at' => time(),
				'name' => 'mllike',
				'alias' => 'Modelica'
			],
			[			
				'created_at' => time(),
				'updated_at' => time(),
				'name' => 'nginx',
				'alias' => 'Nginx'
			],
			[			
				'created_at' => time(),
				'updated_at' => time(),
				'name' => 'ntriples',
				'alias' => 'NTriples'
			],
			[			
				'created_at' => time(),
				'updated_at' => time(),
				'name' => 'ocaml',
				'alias' => 'OCaml'
			],
			[			
				'created_at' => time(),
				'updated_at' => time(),
				'name' => 'octave',
				'alias' => 'Octave (MATLAB)'
			],
			[			
				'created_at' => time(),
				'updated_at' => time(),
				'name' => 'pascal',
				'alias' => 'Pascal'
			],
			[			
				'created_at' => time(),
				'updated_at' => time(),
				'name' => 'pegjs',
				'alias' => 'PEG.js'
			],
			[			
				'created_at' => time(),
				'updated_at' => time(),
				'name' => 'perl',
				'alias' => 'Perl'
			],
			[			
				'created_at' => time(),
				'updated_at' => time(),
				'name' => 'php',
				'alias' => 'PHP'
			],
			[			
				'created_at' => time(),
				'updated_at' => time(),
				'name' => 'piq',
				'alias' => 'Pig Latin'
			],
			[			
				'created_at' => time(),
				'updated_at' => time(),
				'name' => 'properties',
				'alias' => 'Properties files'
			],
			[			
				'created_at' => time(),
				'updated_at' => time(),
				'name' => 'puppet',
				'alias' => 'Puppet'
			],
			[			
				'created_at' => time(),
				'updated_at' => time(),
				'name' => 'python',
				'alias' => 'Python'
			],
			[			
				'created_at' => time(),
				'updated_at' => time(),
				'name' => 'q',
				'alias' => 'Q'
			],
			[			
				'created_at' => time(),
				'updated_at' => time(),
				'name' => 'r',
				'alias' => 'R'
			],
			[			
				'created_at' => time(),
				'updated_at' => time(),
				'name' => 'rpm-changes',
				'alias' => 'RPM'
			],
			[			
				'created_at' => time(),
				'updated_at' => time(),
				'name' => 'rst',
				'alias' => 'reStructuredText'
			],
			[			
				'created_at' => time(),
				'updated_at' => time(),
				'name' => 'ruby',
				'alias' => 'Ruby'
			],
			[			
				'created_at' => time(),
				'updated_at' => time(),
				'name' => 'rust',
				'alias' => 'Rust'
			],
			[			
				'created_at' => time(),
				'updated_at' => time(),
				'name' => 'sass',
				'alias' => 'Sass'
			],
			[			
				'created_at' => time(),
				'updated_at' => time(),
				'name' => 'scala',
				'alias' => 'Scala'
			],
			[			
				'created_at' => time(),
				'updated_at' => time(),
				'name' => 'scheme',
				'alias' => 'Scheme'
			],
			[			
				'created_at' => time(),
				'updated_at' => time(),
				'name' => 'scss',
				'alias' => 'SCSS'
			],
			[			
				'created_at' => time(),
				'updated_at' => time(),
				'name' => 'shell',
				'alias' => 'Shell'
			],
			[			
				'created_at' => time(),
				'updated_at' => time(),
				'name' => 'sieve',
				'alias' => 'Sieve'
			],
			[			
				'created_at' => time(),
				'updated_at' => time(),
				'name' => 'slim',
				'alias' => 'Slim'
			],
			[			
				'created_at' => time(),
				'updated_at' => time(),
				'name' => 'smalltalk',
				'alias' => 'Smalltalk'
			],
			[			
				'created_at' => time(),
				'updated_at' => time(),
				'name' => 'smarty',
				'alias' => 'Smarty'
			],
			[			
				'created_at' => time(),
				'updated_at' => time(),
				'name' => 'smartymixed',
				'alias' => 'Smarty/HTML mixed'
			],
			[			
				'created_at' => time(),
				'updated_at' => time(),
				'name' => 'solr',
				'alias' => 'Solr'
			],
			[			
				'created_at' => time(),
				'updated_at' => time(),
				'name' => 'sql',
				'alias' => 'SQL (several dialects)'
			],
			[			
				'created_at' => time(),
				'updated_at' => time(),
				'name' => 'sparql',
				'alias' => 'SPARQL'
			],
			[			
				'created_at' => time(),
				'updated_at' => time(),
				'name' => 'stex',
				'alias' => 'sTeX, LaTeX'
			],
			[			
				'created_at' => time(),
				'updated_at' => time(),
				'name' => 'tcl',
				'alias' => 'Tcl'
			],
			[			
				'created_at' => time(),
				'updated_at' => time(),
				'name' => 'tiddlywiki',
				'alias' => 'Tiddlywiki'
			],
			[			
				'created_at' => time(),
				'updated_at' => time(),
				'name' => 'tiki',
				'alias' => 'Tiki wiki'
			],
			[			
				'created_at' => time(),
				'updated_at' => time(),
				'name' => 'toml',
				'alias' => 'TOML'
			],
			[			
				'created_at' => time(),
				'updated_at' => time(),
				'name' => 'turtle',
				'alias' => 'Turtle'
			],
			[			
				'created_at' => time(),
				'updated_at' => time(),
				'name' => 'vb',
				'alias' => 'VB.NET'
			],
			[			
				'created_at' => time(),
				'updated_at' => time(),
				'name' => 'vbscript',
				'alias' => 'VBScript'
			],
			[			
				'created_at' => time(),
				'updated_at' => time(),
				'name' => 'velocity',
				'alias' => 'Velocity'
			],
			[			
				'created_at' => time(),
				'updated_at' => time(),
				'name' => 'verilog',
				'alias' => 'Verilog/SystemVerilog'
			],
			[			
				'created_at' => time(),
				'updated_at' => time(),
				'name' => 'xml',
				'alias' => 'XML/HTML'
			],
			[			
				'created_at' => time(),
				'updated_at' => time(),
				'name' => 'xquery',
				'alias' => 'XQuery'
			],
			[			
				'created_at' => time(),
				'updated_at' => time(),
				'name' => 'yaml',
				'alias' => 'YAML'
			],
			[			
				'created_at' => time(),
				'updated_at' => time(),
				'name' => 'z80',
				'alias' => 'Z80
			']
		]);
	}

}