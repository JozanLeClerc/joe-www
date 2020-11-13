.nr PS 12p
.nr PO 1.0i
.nr LL 6.5i
.defcolor blue    rgb 0.1f 0.1f 1.0f
.defcolor bsdred  rgb #9d2121
.defcolor codered rgb #720000
.defcolor grey    rgb #aaaaaa
.defcolor black   rgb #000000
.color
.de bsdr
.gcolor bsdred
..
.de endc
.gcolor
..
.de xa
.XA \\$1
.ps 12p
.B "\m[bsdred]\\$2\m[]" \\$3 \\$4
..
.de b
.B "\m[bsdred]\\$1\m[]" \\$2 \\$3
..
.de nh
.NH \\$1
.ps 14p
..
.gcolor black
.
.bsdr
.TL
.LG
.ps 17p
Dergods' Style and good practices for C/C++ projects
.endc
.AU
.ps 15p
Joe

.ps 12p
v0.1
.DA




.XS 1
.ps 12p
.b "1. Introduction"
.xa 1 "2. Projects and version control"
.xa 1 "	2.1 Directories"
.XE
.PX




.bsdr
.nh 1
Introduction
.endc
.PP
The following is a description of
.b "Dergods' Style"
code and project
formatting to put in use if you work on Dergods' Realm-related code or if you
just need a personal good-looking norm to improve your code readablity. It
is heavily inspired by
.b FreeBSD® 's
.pdfhref W -D \
https://www.freebsd.org/cgi/man.cgi?query=style&apropos=0&sektion=0&\
manpath=FreeBSD+12.1-RELEASE+and+Ports&arch=default&format=html \
-A \m[black],\m[] \
\f(CW\m[codered]style(9)\m[]\f[]
.gcolor
with some changes.
.bsdr
.nh 1
Projects and version control
.nh 2
Directories
.endc
