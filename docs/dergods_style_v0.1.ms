.
.defcolor blue    rgb 0.1f 0.1f 1.0f
.defcolor bsdred  rgb #990000
.defcolor codered rgb #710000
.defcolor grey    rgb #aaaaaa
.defcolor black   rgb #000000
.de bsd
.gcolor bsdred
..
.de end
.gcolor
..
.de xa
.XA \\$1
.B
..
.color
.DA v0.1
.gcolor bsdred
.TL
.LG
Dergods' Style and good practices for C/C++ projects
.gcolor
.AU
.LG
Joe
.bsd
.XS 1
.bsd
.B
1. Introduction
.xa 1
2. Projects and version control
.xa 1
	2.1 Directories
.XE
.PX
.end
.gcolor bsdred
.NH 1
.LG
Introduction
.gcolor
.PP
The following is a description of
.gcolor bsdred
.B "Dergods' Style"
.gcolor
code and project
formatting to put in use if you work on Dergods' Realm-related code or if you
just need a personal good-looking norm to improve your code readablity. It
is heavily inspired by 
.B \m[bsdred]FreeBSD®\m[] 's
.pdfhref W -D \
https://www.freebsd.org/cgi/man.cgi?query=style&apropos=0&sektion=0&\
manpath=FreeBSD+12.1-RELEASE+and+Ports&arch=default&format=html \
-A \m[black],\m[] \
\f(CW\m[codered]style(9)\m[]\f[]
.gcolor
with some changes.
.gcolor bsdred
.NH 1
.LG
Projects and version control
.NH 2
Directories
.gcolor
