<?php


namespace snippets\advent_of_code\y2021\day_5\helper;


class XY
{

  private int $x;
  private int $y;

  public function __construct(int $x, int $y)
  {
    $this->x = $x;
    $this->y = $y;
  }

  /**
   * @return int
   */
  public function getX(): int
  {
    return $this->x;
  }

  /**
   * @return int
   */
  public function getY(): int
  {
    return $this->y;
  }


}