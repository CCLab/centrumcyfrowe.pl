<div style="background: #272822; overflow:auto;width:auto;border-width:0;padding:0;"><table><tr><td><pre style="margin: 0; line-height: 125%">  1
  2
  3
  4
  5
  6
  7
  8
  9
 10
 11
 12
 13
 14
 15
 16
 17
 18
 19
 20
 21
 22
 23
 24
 25
 26
 27
 28
 29
 30
 31
 32
 33
 34
 35
 36
 37
 38
 39
 40
 41
 42
 43
 44
 45
 46
 47
 48
 49
 50
 51
 52
 53
 54
 55
 56
 57
 58
 59
 60
 61
 62
 63
 64
 65
 66
 67
 68
 69
 70
 71
 72
 73
 74
 75
 76
 77
 78
 79
 80
 81
 82
 83
 84
 85
 86
 87
 88
 89
 90
 91
 92
 93
 94
 95
 96
 97
 98
 99
100
101
102
103
104
105
106
107
108
109
110
111
112
113
114
115
116
117
118
119
120
121
122
123
124
125
126
127
128
129
130
131
132
133
134
135
136
137
138
139
140
141
142
143
144
145
146
147
148
149
150
151
152
153
154
155
156
157
158
159
160
161
162
163
164
165
166
167
168
169
170
171
172
173
174
175
176
177
178
179
180
181
182
183
184
185
186
187
188
189
190
191
192
193
194
195
196
197
198
199
200
201
202
203
204
205
206
207
208
209
210
211
212
213
214
215
216
217
218
219
220
221
222
223
224
225
226
227
228
229
230
231
232
233
234
235
236
237
238
239
240
241
242
243
244
245
246
247
248
249
250
251
252
253
254
255
256
257
258
259
260
261
262
263</pre></td><td><pre style="margin: 0; line-height: 125%"><span style="color: #75715e">/* HEADER */</span>
<span style="color: #a6e22e">.header</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #66d9ef">height</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">100</span><span style="color: #f8f8f2">vh;</span>
    <span style="color: #66d9ef">min-height</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">700px</span><span style="color: #f8f8f2">;</span>
    <span style="color: #66d9ef">background</span><span style="color: #f92672">:</span> <span style="color: #e6db74">url(&#39;../images/header-bg.jpg&#39;)</span> <span style="color: #66d9ef">no-repeat</span><span style="color: #f8f8f2">;</span>
    <span style="color: #66d9ef">background</span><span style="color: #f92672">-</span><span style="color: #66d9ef">size</span><span style="color: #f92672">:</span> <span style="color: #f8f8f2">cover;</span>
    <span style="color: #66d9ef">background-position</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">center</span><span style="color: #f8f8f2">;</span>
    <span style="color: #66d9ef">overflow</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">hidden</span><span style="color: #f8f8f2">;</span>
    <span style="color: #66d9ef">max-width</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">100</span><span style="color: #f8f8f2">vw;</span>
    <span style="color: #66d9ef">position</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">relative</span><span style="color: #f8f8f2">;</span>
    <span style="color: #f92672">.</span><span style="color: #66d9ef">content</span><span style="color: #f92672">-</span><span style="color: #f8f8f2">box</span> <span style="color: #960050; background-color: #1e0010">{</span>
        <span style="color: #66d9ef">padding-top</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">307px</span><span style="color: #f8f8f2">;</span>
        <span style="color: #f92672">@</span><span style="color: #f8f8f2">include</span> <span style="color: #f8f8f2">laptop</span><span style="color: #960050; background-color: #1e0010">{</span>
            <span style="color: #66d9ef">padding-top</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">200px</span><span style="color: #f8f8f2">;</span>
        <span style="color: #f8f8f2">}</span>
        <span style="color: #f92672">h1</span> <span style="color: #f8f8f2">{</span>
            <span style="color: #66d9ef">font-weight</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">bold</span><span style="color: #f8f8f2">;</span>
            <span style="color: #66d9ef">font-size</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">48px</span><span style="color: #f8f8f2">;</span>
            <span style="color: #66d9ef">line-height</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">1</span><span style="color: #f92672">.</span><span style="color: #ae81ff">17</span><span style="color: #f8f8f2">;</span>
            <span style="color: #66d9ef">letter-spacing</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">normal</span><span style="color: #f8f8f2">;</span>
            <span style="color: #66d9ef">text-align</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">left</span><span style="color: #f8f8f2">;</span>
            <span style="color: #66d9ef">margin</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">0</span> <span style="color: #ae81ff">0</span> <span style="color: #ae81ff">08px</span> <span style="color: #ae81ff">0</span><span style="color: #f8f8f2">;</span>
        <span style="color: #f8f8f2">}</span>
        <span style="color: #f92672">h4</span> <span style="color: #f8f8f2">{</span>
            <span style="color: #66d9ef">font-size</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">22px</span><span style="color: #f8f8f2">;</span>
            <span style="color: #66d9ef">font-weight</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">normal</span><span style="color: #f8f8f2">;</span>
            <span style="color: #66d9ef">font-style</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">normal</span><span style="color: #f8f8f2">;</span>
            <span style="color: #66d9ef">font-stretch</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">normal</span><span style="color: #f8f8f2">;</span>
            <span style="color: #66d9ef">line-height</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">1</span><span style="color: #f92672">.</span><span style="color: #ae81ff">27</span><span style="color: #f8f8f2">;</span>
            <span style="color: #66d9ef">letter-spacing</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">normal</span><span style="color: #f8f8f2">;</span>
            <span style="color: #66d9ef">text-align</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">left</span><span style="color: #f8f8f2">;</span>
            <span style="color: #66d9ef">margin</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">0</span> <span style="color: #ae81ff">0</span> <span style="color: #ae81ff">32px</span> <span style="color: #ae81ff">0</span><span style="color: #f8f8f2">;</span>
        <span style="color: #f8f8f2">}</span>
    <span style="color: #960050; background-color: #1e0010">}</span>

    <span style="color: #960050; background-color: #1e0010">$</span><span style="color: #f92672">sideCodeWidth:</span> <span style="color: #f92672">850px;</span>
    <span style="color: #a6e22e">.side-code</span><span style="color: #f8f8f2">{</span>
        <span style="color: #f92672">@</span><span style="color: #f8f8f2">include</span> <span style="color: #f8f8f2">mobile</span><span style="color: #960050; background-color: #1e0010">{</span>
            <span style="color: #66d9ef">display</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">none</span><span style="color: #f8f8f2">;</span>
        <span style="color: #f8f8f2">}</span>
        <span style="color: #f92672">position:</span> <span style="color: #f92672">absolute;</span>
        <span style="color: #f92672">top:</span> <span style="color: #f92672">0;</span>
        <span style="color: #f92672">right:</span> <span style="color: #f92672">-</span><span style="color: #960050; background-color: #1e0010">$</span><span style="color: #f92672">sideCodeWidth;</span>
        <span style="color: #f92672">width:</span> <span style="color: #960050; background-color: #1e0010">$</span><span style="color: #f92672">sideCodeWidth;</span>
        <span style="color: #f92672">height:</span> <span style="color: #f92672">100vh;</span>
        <span style="color: #f92672">z-index:</span> <span style="color: #f92672">999;</span>
        <span style="color: #f92672">background:</span> <span style="color: #a6e22e">#1d1f20</span><span style="color: #f92672">;</span>
        <span style="color: #66d9ef">@include</span> <span style="color: #f92672">transition(1s</span> <span style="color: #f92672">all</span> <span style="color: #f92672">ease-in-out)</span><span style="color: #f8f8f2">;</span>

        <span style="color: #a6e22e">.toggle-code</span><span style="color: #f8f8f2">{</span>
            <span style="color: #f8f8f2">span</span><span style="color: #960050; background-color: #1e0010">{</span>
                <span style="color: #66d9ef">display</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">inline</span><span style="color: #f92672">-</span><span style="color: #66d9ef">block</span><span style="color: #f8f8f2">;</span>
                <span style="color: #66d9ef">border-bottom</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">2px</span> <span style="color: #66d9ef">solid</span> <span style="color: #960050; background-color: #1e0010">$</span><span style="color: #f8f8f2">white;</span>
                <span style="color: #66d9ef">border-left</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">2px</span> <span style="color: #66d9ef">solid</span> <span style="color: #960050; background-color: #1e0010">$</span><span style="color: #f8f8f2">white;</span>
                <span style="color: #f92672">@</span><span style="color: #f8f8f2">include</span> <span style="color: #f8f8f2">transition(</span><span style="color: #ae81ff">.3s</span> <span style="color: #f8f8f2">all);</span>
                <span style="color: #f92672">@</span><span style="color: #f8f8f2">include</span> <span style="color: #f8f8f2">transform(rotate(</span><span style="color: #ae81ff">45</span><span style="color: #f8f8f2">deg));</span>
                <span style="color: #66d9ef">width</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">20px</span><span style="color: #f8f8f2">;</span>
                <span style="color: #66d9ef">height</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">20px</span><span style="color: #f8f8f2">;</span>
            <span style="color: #f8f8f2">}</span>
            <span style="color: #f92672">position:</span> <span style="color: #f92672">absolute;</span>
            <span style="color: #f92672">top:</span> <span style="color: #f92672">calc(50%</span> <span style="color: #f92672">-</span> <span style="color: #f92672">10px);</span>
            <span style="color: #f92672">left:</span> <span style="color: #f92672">-45px;</span>
            <span style="color: #f92672">cursor:</span> <span style="color: #f92672">pointer;</span>

            <span style="color: #a6e22e">.tooltip-container</span><span style="color: #f8f8f2">{</span>
                <span style="color: #66d9ef">position</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">absolute</span><span style="color: #f8f8f2">;</span>
                <span style="color: #66d9ef">display</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">block</span><span style="color: #f8f8f2">;</span>
                <span style="color: #f92672">.</span><span style="color: #f8f8f2">tooltip</span><span style="color: #f92672">-</span><span style="color: #f8f8f2">images</span><span style="color: #960050; background-color: #1e0010">{</span>
                    <span style="color: #66d9ef">position</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">relative</span><span style="color: #f8f8f2">;</span>
                    <span style="color: #66d9ef">background</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">none</span><span style="color: #f8f8f2">;</span>
                    <span style="color: #66d9ef">bottom</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">auto</span><span style="color: #f8f8f2">;</span>
                    <span style="color: #66d9ef">right</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">auto</span><span style="color: #f8f8f2">;</span>
                    <span style="color: #f92672">.</span><span style="color: #f8f8f2">label</span><span style="color: #960050; background-color: #1e0010">{</span>
                        <span style="color: #66d9ef">top</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">-40px</span><span style="color: #f8f8f2">;</span>
                        <span style="color: #66d9ef">left</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">-40px</span><span style="color: #f8f8f2">;</span>
                        <span style="color: #f92672">&amp;:</span><span style="color: #f8f8f2">after</span><span style="color: #960050; background-color: #1e0010">{</span>
                            <span style="color: #66d9ef">left</span><span style="color: #f92672">:</span> <span style="color: #f8f8f2">calc(</span><span style="color: #ae81ff">50</span><span style="color: #f92672">%</span> <span style="color: #f92672">+</span> <span style="color: #ae81ff">40px</span><span style="color: #f8f8f2">);</span>
                        <span style="color: #f8f8f2">}</span>
                    <span style="color: #960050; background-color: #1e0010">}</span>
                <span style="color: #960050; background-color: #1e0010">}</span>
            <span style="color: #960050; background-color: #1e0010">}</span>

            <span style="color: #f92672">&amp;</span><span style="color: #a6e22e">:hover</span><span style="color: #f8f8f2">{</span>
                <span style="color: #f92672">.</span><span style="color: #f8f8f2">tooltip</span><span style="color: #f92672">-</span><span style="color: #f8f8f2">container</span><span style="color: #960050; background-color: #1e0010">{</span>
                    <span style="color: #f92672">.</span><span style="color: #f8f8f2">tooltip</span><span style="color: #f92672">-</span><span style="color: #f8f8f2">images</span><span style="color: #960050; background-color: #1e0010">{</span>
                        <span style="color: #f8f8f2">label</span><span style="color: #960050; background-color: #1e0010">{</span>
                            <span style="color: #66d9ef">opacity</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">1</span><span style="color: #f8f8f2">;</span>
                        <span style="color: #f8f8f2">}</span>
                    <span style="color: #960050; background-color: #1e0010">}</span>
                <span style="color: #960050; background-color: #1e0010">}</span>
            <span style="color: #960050; background-color: #1e0010">}</span>
        <span style="color: #960050; background-color: #1e0010">}</span>

        <span style="color: #f92672">&amp;</span><span style="color: #a6e22e">.show</span><span style="color: #f8f8f2">{</span>
            <span style="color: #f92672">@</span><span style="color: #f8f8f2">include</span> <span style="color: #f8f8f2">transform(translateX(</span><span style="color: #f92672">-</span><span style="color: #960050; background-color: #1e0010">$</span><span style="color: #f8f8f2">sideCodeWidth));</span>

            <span style="color: #f92672">.</span><span style="color: #f8f8f2">toggle</span><span style="color: #f92672">-</span><span style="color: #f8f8f2">code</span> <span style="color: #f8f8f2">span</span><span style="color: #960050; background-color: #1e0010">{</span>
                <span style="color: #f92672">@</span><span style="color: #f8f8f2">include</span> <span style="color: #f8f8f2">transform(rotate(</span><span style="color: #ae81ff">225</span><span style="color: #f8f8f2">deg));</span>
            <span style="color: #f8f8f2">}</span>
        <span style="color: #960050; background-color: #1e0010">}</span>

        <span style="color: #a6e22e">.numbers-container</span><span style="color: #f8f8f2">{</span>
            <span style="color: #66d9ef">width</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">30px</span><span style="color: #f8f8f2">;</span>
            <span style="color: #66d9ef">text-align</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">right</span><span style="color: #f8f8f2">;</span>
            <span style="color: #66d9ef">float</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">left</span><span style="color: #f8f8f2">;</span>
            <span style="color: #66d9ef">color</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">#333333</span><span style="color: #f8f8f2">;</span>
            <span style="color: #66d9ef">margin</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">0</span> <span style="color: #ae81ff">25px</span> <span style="color: #ae81ff">0</span> <span style="color: #ae81ff">10px</span><span style="color: #f8f8f2">;</span>
        <span style="color: #f8f8f2">}</span>
        <span style="color: #a6e22e">.code-container</span><span style="color: #f8f8f2">{</span>
            <span style="color: #66d9ef">width</span><span style="color: #f92672">:</span> <span style="color: #960050; background-color: #1e0010">$</span><span style="color: #f8f8f2">sideCodeWidth;</span>
            <span style="color: #66d9ef">float</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">left</span><span style="color: #f8f8f2">;</span>
            <span style="color: #66d9ef">height</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">100</span><span style="color: #f8f8f2">vh;</span>
            <span style="color: #66d9ef">overflow-y</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">scroll</span><span style="color: #f8f8f2">;</span>
            <span style="color: #f8f8f2">pre</span><span style="color: #960050; background-color: #1e0010">{</span>
                <span style="color: #66d9ef">margin</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">0</span><span style="color: #f8f8f2">;</span>
                <span style="color: #66d9ef">background</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">none</span><span style="color: #f8f8f2">;</span>
                <span style="color: #66d9ef">border</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">none</span><span style="color: #f8f8f2">;</span>
            <span style="color: #f8f8f2">}</span>
            <span style="color: #f92672">table</span><span style="color: #f8f8f2">{</span>
                <span style="color: #66d9ef">margin</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">0</span><span style="color: #f8f8f2">;</span>
                <span style="color: #66d9ef">max-width</span><span style="color: #f92672">:</span> <span style="color: #960050; background-color: #1e0010">$</span><span style="color: #f8f8f2">sideCodeWidth;</span>
                <span style="color: #f8f8f2">tbody</span> <span style="color: #f8f8f2">td</span><span style="color: #f92672">,</span> <span style="color: #f8f8f2">tbody</span> <span style="color: #f8f8f2">th</span><span style="color: #960050; background-color: #1e0010">{</span>
                    <span style="color: #66d9ef">border</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">none</span><span style="color: #f8f8f2">;</span>
                <span style="color: #f8f8f2">}</span>
            <span style="color: #960050; background-color: #1e0010">}</span>
        <span style="color: #960050; background-color: #1e0010">}</span>
    <span style="color: #960050; background-color: #1e0010">}</span>
<span style="color: #960050; background-color: #1e0010">}</span>
<span style="color: #f92672">section</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #f8f8f2">h3</span> <span style="color: #960050; background-color: #1e0010">{</span>
        <span style="color: #66d9ef">margin</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">20px</span> <span style="color: #ae81ff">0</span> <span style="color: #ae81ff">10px</span> <span style="color: #ae81ff">0</span><span style="color: #f8f8f2">;</span>
    <span style="color: #f8f8f2">}</span>
<span style="color: #960050; background-color: #1e0010">}</span>

<span style="color: #75715e">/* SECTION: OBSZARY DZIAŁAŃ */</span>
<span style="color: #f92672">section</span><span style="color: #a6e22e">.obszary-dzialan</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #f92672">//</span><span style="color: #66d9ef">background</span><span style="color: #f92672">:</span> <span style="color: #960050; background-color: #1e0010">$</span><span style="color: #f8f8f2">white;</span>
    <span style="color: #66d9ef">padding-bottom</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">60px</span><span style="color: #f8f8f2">;</span>
    <span style="color: #f92672">.</span><span style="color: #f8f8f2">area</span><span style="color: #f92672">-</span><span style="color: #66d9ef">block</span> <span style="color: #960050; background-color: #1e0010">{</span>
        <span style="color: #66d9ef">margin</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">40px</span> <span style="color: #ae81ff">0</span> <span style="color: #ae81ff">20px</span> <span style="color: #ae81ff">0</span><span style="color: #f8f8f2">;</span>
        <span style="color: #f8f8f2">h4</span> <span style="color: #960050; background-color: #1e0010">{</span>
            <span style="color: #f8f8f2">transition</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">.2s</span> <span style="color: #f8f8f2">ease</span><span style="color: #f92672">-</span><span style="color: #f8f8f2">in</span><span style="color: #f92672">-</span><span style="color: #f8f8f2">out;</span>
            <span style="color: #66d9ef">margin</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">24px</span> <span style="color: #ae81ff">0</span>
        <span style="color: #f8f8f2">}</span>
        <span style="color: #f92672">a</span> <span style="color: #f8f8f2">{</span>
            <span style="color: #f92672">&amp;:</span><span style="color: #f8f8f2">hover</span><span style="color: #f92672">,&amp;:</span><span style="color: #f8f8f2">focus</span> <span style="color: #960050; background-color: #1e0010">{</span>
                <span style="color: #66d9ef">text-decoration</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">none</span><span style="color: #f8f8f2">;</span>
                <span style="color: #66d9ef">color</span><span style="color: #f92672">:</span> <span style="color: #960050; background-color: #1e0010">$</span><span style="color: #f8f8f2">main</span><span style="color: #f92672">-</span><span style="color: #66d9ef">text</span><span style="color: #f8f8f2">;</span>
                <span style="color: #f8f8f2">p</span> <span style="color: #960050; background-color: #1e0010">{</span>
                    <span style="color: #66d9ef">color</span><span style="color: #f92672">:</span> <span style="color: #960050; background-color: #1e0010">$</span><span style="color: #f8f8f2">main</span><span style="color: #f92672">-</span><span style="color: #66d9ef">text</span><span style="color: #f8f8f2">;</span>
                <span style="color: #f8f8f2">}</span>
                <span style="color: #f92672">h4</span> <span style="color: #f8f8f2">{</span>
                    <span style="color: #66d9ef">color</span><span style="color: #f92672">:</span> <span style="color: #960050; background-color: #1e0010">$</span><span style="color: #f8f8f2">orange;</span>
                <span style="color: #f8f8f2">}</span>
            <span style="color: #960050; background-color: #1e0010">}</span>
        <span style="color: #960050; background-color: #1e0010">}</span>
    <span style="color: #960050; background-color: #1e0010">}</span>
    <span style="color: #f92672">h4+p</span> <span style="color: #f8f8f2">{</span>
        <span style="color: #66d9ef">font-size</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">16px</span><span style="color: #f8f8f2">;</span>
        <span style="color: #66d9ef">font-weight</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">normal</span><span style="color: #f8f8f2">;</span>
    <span style="color: #f8f8f2">}</span>
<span style="color: #960050; background-color: #1e0010">}</span>

<span style="color: #75715e">/* SECTION: CZYTELNIA */</span>
<span style="color: #f92672">section</span><span style="color: #a6e22e">.czytelnia</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #66d9ef">background-color</span><span style="color: #f92672">:</span> <span style="color: #960050; background-color: #1e0010">$</span><span style="color: #f8f8f2">dirty</span><span style="color: #f92672">-</span><span style="color: #f8f8f2">white;</span>

    <span style="color: #f92672">.</span><span style="color: #f8f8f2">tooltip</span><span style="color: #f92672">-</span><span style="color: #f8f8f2">images</span> <span style="color: #960050; background-color: #1e0010">{</span>
        <span style="color: #66d9ef">right</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">15px</span><span style="color: #f8f8f2">;</span>
        <span style="color: #66d9ef">bottom</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">15px</span><span style="color: #f8f8f2">;</span>
    <span style="color: #f8f8f2">}</span>
<span style="color: #960050; background-color: #1e0010">}</span>

<span style="color: #75715e">/* SECTION: PROJEKTY */</span>
<span style="color: #f92672">section</span><span style="color: #a6e22e">.projekty</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #66d9ef">background</span><span style="color: #f92672">:</span> <span style="color: #960050; background-color: #1e0010">$</span><span style="color: #f8f8f2">main</span><span style="color: #f92672">-</span><span style="color: #66d9ef">text</span><span style="color: #f8f8f2">;</span>
    <span style="color: #66d9ef">color</span><span style="color: #f92672">:</span> <span style="color: #960050; background-color: #1e0010">$</span><span style="color: #f8f8f2">main</span><span style="color: #f92672">-</span><span style="color: #f8f8f2">bg;</span>
    <span style="color: #66d9ef">overflow</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">hidden</span><span style="color: #f8f8f2">;</span>
    <span style="color: #f92672">.</span><span style="color: #f8f8f2">project</span> <span style="color: #960050; background-color: #1e0010">{</span>
        <span style="color: #f8f8f2">a</span><span style="color: #f92672">&gt;</span><span style="color: #f8f8f2">div</span><span style="color: #f92672">:</span><span style="color: #f8f8f2">not(</span><span style="color: #f92672">.</span><span style="color: #f8f8f2">tooltip</span><span style="color: #f92672">-</span><span style="color: #f8f8f2">container)</span><span style="color: #960050; background-color: #1e0010">{</span>
            <span style="color: #f8f8f2">word</span><span style="color: #f92672">-</span><span style="color: #f8f8f2">wrap</span><span style="color: #f92672">:</span> <span style="color: #f8f8f2">break</span><span style="color: #f92672">-</span><span style="color: #f8f8f2">word;</span>
            <span style="color: #66d9ef">overflow</span><span style="color: #f92672">-</span><span style="color: #f8f8f2">wrap</span><span style="color: #f92672">:</span> <span style="color: #f8f8f2">break</span><span style="color: #f92672">-</span><span style="color: #f8f8f2">word;</span>
            <span style="color: #66d9ef">padding</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">32px</span><span style="color: #f8f8f2">;</span>
            <span style="color: #66d9ef">min-height</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">450px</span><span style="color: #f8f8f2">;</span>
            <span style="color: #f8f8f2">h3</span> <span style="color: #960050; background-color: #1e0010">{</span>
                <span style="color: #66d9ef">min-height</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">72px</span><span style="color: #f8f8f2">;</span>
                <span style="color: #66d9ef">color</span><span style="color: #f92672">:</span> <span style="color: #960050; background-color: #1e0010">$</span><span style="color: #f8f8f2">white;</span>
            <span style="color: #f8f8f2">}</span>
            <span style="color: #66d9ef">@include</span> <span style="color: #f92672">transition(2s</span> <span style="color: #f92672">background)</span><span style="color: #f8f8f2">;</span>
            <span style="color: #f92672">transition:</span> <span style="color: #f92672">2s</span> <span style="color: #f92672">ease-in-out;</span>
            <span style="color: #f92672">background-image:</span> <span style="color: #f92672">url(</span><span style="color: #e6db74">&#39;../images/projekty-projects-placeholder.jpg&#39;</span><span style="color: #f92672">);</span>
            <span style="color: #f92672">background-repeat:</span> <span style="color: #f92672">no-repeat;</span>
            <span style="color: #f92672">background-size:</span> <span style="color: #f92672">100%</span> <span style="color: #f92672">100%;</span>
            <span style="color: #f92672">background-position:</span> <span style="color: #f92672">center;</span>
            <span style="color: #f92672">button</span><span style="color: #f8f8f2">{</span>
                <span style="color: #66d9ef">color</span><span style="color: #f92672">:</span> <span style="color: #960050; background-color: #1e0010">$</span><span style="color: #f8f8f2">dark</span><span style="color: #f92672">-</span><span style="color: #f8f8f2">gray;</span>
            <span style="color: #f8f8f2">}</span>
        <span style="color: #960050; background-color: #1e0010">}</span>
        <span style="color: #f92672">&amp;</span><span style="color: #a6e22e">:hover</span> <span style="color: #f8f8f2">{</span>
            <span style="color: #66d9ef">cursor</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">pointer</span><span style="color: #f8f8f2">;</span>
            <span style="color: #f8f8f2">a</span><span style="color: #f92672">&gt;</span><span style="color: #f8f8f2">div</span><span style="color: #f92672">:</span><span style="color: #f8f8f2">first</span><span style="color: #f92672">-</span><span style="color: #f8f8f2">child</span> <span style="color: #960050; background-color: #1e0010">{</span>
                <span style="color: #66d9ef">background</span><span style="color: #f92672">-</span><span style="color: #66d9ef">size</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">110</span><span style="color: #f92672">%</span> <span style="color: #ae81ff">110</span><span style="color: #f92672">%</span><span style="color: #f8f8f2">;</span>
            <span style="color: #f8f8f2">}</span>
        <span style="color: #960050; background-color: #1e0010">}</span>
    <span style="color: #960050; background-color: #1e0010">}</span>
    <span style="color: #f92672">a</span><span style="color: #a6e22e">.button</span> <span style="color: #f8f8f2">{</span>
        <span style="color: #66d9ef">margin-top</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">40px</span><span style="color: #f8f8f2">;</span>
        <span style="color: #66d9ef">color</span><span style="color: #f92672">:</span> <span style="color: #960050; background-color: #1e0010">$</span><span style="color: #f8f8f2">dark</span><span style="color: #f92672">-</span><span style="color: #f8f8f2">gray;</span>
    <span style="color: #f8f8f2">}</span>

    <span style="color: #f92672">a</span> <span style="color: #f8f8f2">{</span>
        <span style="color: #66d9ef">color</span><span style="color: #f92672">:</span> <span style="color: #f8f8f2">white;</span>
        <span style="color: #66d9ef">text-decoration</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">none</span><span style="color: #f8f8f2">;</span>

    <span style="color: #f8f8f2">}</span>
    <span style="color: #a6e22e">.swiper-container-projects-home</span><span style="color: #f8f8f2">{</span>
        <span style="color: #66d9ef">padding-left</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">15px</span><span style="color: #f8f8f2">;</span>

        <span style="color: #66d9ef">width</span><span style="color: #f92672">:</span> <span style="color: #f8f8f2">calc(</span><span style="color: #ae81ff">1170px</span> <span style="color: #f92672">+</span> <span style="color: #f8f8f2">((</span><span style="color: #ae81ff">100</span><span style="color: #f92672">%</span> <span style="color: #f92672">-</span> <span style="color: #ae81ff">1170px</span><span style="color: #f8f8f2">)</span> <span style="color: #f92672">/</span> <span style="color: #ae81ff">2</span><span style="color: #f8f8f2">));</span>
        <span style="color: #66d9ef">margin-left</span><span style="color: #f92672">:</span> <span style="color: #f8f8f2">calc((</span><span style="color: #ae81ff">100</span><span style="color: #f92672">%</span> <span style="color: #f92672">-</span> <span style="color: #ae81ff">1170px</span><span style="color: #f8f8f2">)</span> <span style="color: #f92672">/</span> <span style="color: #ae81ff">2</span><span style="color: #f8f8f2">);</span>

        <span style="color: #f92672">@</span><span style="color: #f8f8f2">media</span> <span style="color: #f8f8f2">(</span><span style="color: #66d9ef">max-width</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">1200px</span><span style="color: #f8f8f2">)</span> <span style="color: #960050; background-color: #1e0010">{</span>
            <span style="color: #66d9ef">width</span><span style="color: #f92672">:</span> <span style="color: #f8f8f2">calc(</span><span style="color: #ae81ff">970px</span> <span style="color: #f92672">+</span> <span style="color: #f8f8f2">((</span><span style="color: #ae81ff">100</span><span style="color: #f92672">%</span> <span style="color: #f92672">-</span> <span style="color: #ae81ff">970px</span><span style="color: #f8f8f2">)</span> <span style="color: #f92672">/</span> <span style="color: #ae81ff">2</span><span style="color: #f8f8f2">));</span>
            <span style="color: #66d9ef">margin-left</span><span style="color: #f92672">:</span> <span style="color: #f8f8f2">calc((</span><span style="color: #ae81ff">100</span><span style="color: #f92672">%</span> <span style="color: #f92672">-</span> <span style="color: #ae81ff">970px</span><span style="color: #f8f8f2">)</span> <span style="color: #f92672">/</span> <span style="color: #ae81ff">2</span><span style="color: #f8f8f2">);</span>
        <span style="color: #f8f8f2">}</span>

        <span style="color: #66d9ef">@media</span> <span style="color: #f92672">(max-width:</span> <span style="color: #f92672">970px)</span> <span style="color: #f8f8f2">{</span>
            <span style="color: #f92672">width:</span> <span style="color: #f92672">calc(750px</span> <span style="color: #f92672">+</span> <span style="color: #f92672">((100%</span> <span style="color: #f92672">-</span> <span style="color: #f92672">750px)</span> <span style="color: #f92672">/</span> <span style="color: #f92672">2));</span>
            <span style="color: #f92672">margin-left:</span> <span style="color: #f92672">calc((100%</span> <span style="color: #f92672">-</span> <span style="color: #f92672">750px)</span> <span style="color: #f92672">/</span> <span style="color: #f92672">2);</span>
        <span style="color: #f8f8f2">}</span>

        <span style="color: #66d9ef">@media</span> <span style="color: #f92672">(max-width:</span> <span style="color: #f92672">767px)</span> <span style="color: #f8f8f2">{</span>
            <span style="color: #f92672">width:</span> <span style="color: #f92672">100%;</span>
            <span style="color: #f92672">margin-left:</span> <span style="color: #f92672">0;</span>
        <span style="color: #f8f8f2">}</span>

        <span style="color: #a6e22e">.swiper-wrapper</span> <span style="color: #f8f8f2">{</span>
            <span style="color: #66d9ef">white-space</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">nowrap</span><span style="color: #f8f8f2">;</span>
            <span style="color: #f92672">.</span><span style="color: #f8f8f2">swiper</span><span style="color: #f92672">-</span><span style="color: #f8f8f2">slide</span> <span style="color: #960050; background-color: #1e0010">{</span>
                <span style="color: #66d9ef">width</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">370px</span><span style="color: #f8f8f2">;</span>
                <span style="color: #66d9ef">float</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">none</span><span style="color: #f8f8f2">;</span>
                <span style="color: #66d9ef">display</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">inline</span><span style="color: #f92672">-</span><span style="color: #66d9ef">block</span><span style="color: #f8f8f2">;</span>
                <span style="color: #66d9ef">white-space</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">normal</span><span style="color: #f8f8f2">;</span>
                <span style="color: #66d9ef">vertical-align</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">middle</span><span style="color: #f8f8f2">;</span>
            <span style="color: #f8f8f2">}</span>
        <span style="color: #960050; background-color: #1e0010">}</span>
    <span style="color: #960050; background-color: #1e0010">}</span>
<span style="color: #960050; background-color: #1e0010">}</span>

<span style="color: #75715e">/* SECTION: PROJEKTY */</span>
<span style="color: #f92672">section</span><span style="color: #a6e22e">.newsletter</span> <span style="color: #f8f8f2">{</span>
    <span style="color: #66d9ef">background</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">#f1f1f1</span><span style="color: #f8f8f2">;</span>
    <span style="color: #f92672">.</span><span style="color: #f8f8f2">input</span><span style="color: #f92672">-</span><span style="color: #f8f8f2">email</span> <span style="color: #960050; background-color: #1e0010">{</span>
        <span style="color: #66d9ef">width</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">100</span><span style="color: #f92672">%</span><span style="color: #f8f8f2">;</span>
        <span style="color: #66d9ef">padding</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">15px</span> <span style="color: #ae81ff">32px</span><span style="color: #f8f8f2">;</span>
        <span style="color: #66d9ef">border</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">0</span><span style="color: #f8f8f2">;</span>
        <span style="color: #66d9ef">outline</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">0</span><span style="color: #f8f8f2">;</span>
        <span style="color: #66d9ef">font-weight</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">bold</span><span style="color: #f8f8f2">;</span>
    <span style="color: #f8f8f2">}</span>
    <span style="color: #a6e22e">.button</span> <span style="color: #f8f8f2">{</span>
        <span style="color: #66d9ef">width</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">100</span><span style="color: #f92672">%</span><span style="color: #f8f8f2">;</span>
    <span style="color: #f8f8f2">}</span>
<span style="color: #960050; background-color: #1e0010">}</span>
</pre></td></tr></table></div>
