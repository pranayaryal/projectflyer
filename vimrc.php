
set nocompatible                                                 "We want the

set autochdir
set tags=./tags,tags;$HOME

so ~/.vim/plugins.vim




syntax enable


set backspace=indent,eol,start                                    "Make backspace behave like every other editor"
let mapleader = ',' 						  "The default leader is \ but a comma is much better"
set nonumber							  "Let's activate line numbers."
set noerrorbells visualbell t_vb=                                 "No bells"



"-----------------Visuals-------------------"

colorscheme atom-dark-256

set t_CO=256

"We will fake a custom left padding for each window.
highlight LineNr  ctermbg=bg

set foldcolumn=2

hi foldcolumn ctermbg=bg


"Get rid of ugly split borders
hi vertsplit ctermfg=bg ctermbg=bg


"----------------Split Management------------"

set splitbelow
set splitright

nmap <C-J> <C-W><C-J>
nmap <C-K> <C-W><C-K>
nmap <C-H> <C-W><C-H>
nmap <C-L> <C-W><C-L>



"-----------------Mappings-------------------"
set hlsearch
set incsearch




"-----------------Mappings-------------------"

"Make it easy to edit the .vimrc file"
nmap <leader>ev :tabedit ~/.vimrc<cr>

"Make it easy to edit the snippets file
nmap <leader>es :e ~/.vim/snippets/<cr>

"Add simple highlight removal"
nmap <leader><space> :nohlsearch<cr>

"Make NERDTree easier to toggle"
nmap <c-T> :NERDTreeToggle<cr>
nmap <c-R> :CtrlPBufTag<cr>
nmap <c-E> :CtrlPMRUFiles<cr>

nmap <leader>f :tag<space>


"-----------------Plugins-------------------"


"/
"/ CtrlP
"/
let g:ctrlp_custom_ignore = 'node_modules\|git'
let g:ctrlp_match_window = 'top,order:ttb,min:1,max:30,results:30'


"/
"/ NERDTree
"/
let NERDTreeHijackNetrw = 0


"Make NERDTree easier to toggle"
nmap <c-T> :NERDTreeToggle<cr>
nmap <c-R> :CtrlPBufTag<cr>
nmap <c-E> :CtrlPMRUFiles<cr>



"/
"/ Greplace.Vim
"/
set grepprg=ag        "We want to use Ag for the search"

let g:grep_cmd_opts = '--line-numbers --noheading'




"-------------------Laravel specific-----------"
nmap <leader>lr :e /home/pranayaryal/Code/blog/app/Http/routes.php<cr> 

nmap <leader><leader>f :CtrlP<cr>app/Http/Controllers/

nmap <leader><leader>m :CtrlP<cr>blog/app/

nmap <leader><leader>v :e /home/pranayaryal/Code/blog/resources/views/<cr>


nmap <leader><leader>c :e /home/pranayaryal/Code/blog/app/Http/Controllers/<cr>







"-------------------Auto Commands------------"

"Automatically source Vimrc file on save"

augroup autosourcing
        autocmd!
        autocmd BufWritePost .vimrc source %
augroup END





"Notes and Tips
" - Press 'zz' 	to instantnly center the line where the cursor is located
